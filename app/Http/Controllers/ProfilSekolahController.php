<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sekolah = [];
        $data = ProfilSekolah::all();
        if($data->count() > 0)
        {
            $sekolah = $data;
        } else {
            $sekolah = [];
        };

        return view('pages.sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bentukpendidikan = ['tk', 'sd', 'smp', 'sma', 'smk'];
        return view('pages.sekolah.create', compact('bentukpendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'namasekolah' => 'required',
            // 'npsn' => '',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            // 'lintang' => '',
            // 'bujur' => '',
            // 'telp' => '',
            'email' => 'email:rfc,dns',
            'website' => 'url',
            // 'logo' => '',
        ]);

        // jika ada file logo yang diupload simpan di storage
        if($request->file('file'))
        {
            $filename = time().'.'.$request->file->extension();
            $request->file('file')->storeAs('public', $filename);
        } else {
            $filename = null;
        }

        // simpan data di db
        $data = ProfilSekolah::create([
            'namasekolah' => $request->namasekolah,
            'npsn' => $request->npsn,
            'bentukpendidikan' => $request->bentukpendidikan,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kodepos' => $request->kodepos,
            'lintang' => $request->lintang,
            'bujur' => $request->bujur,
            'telp' => $request->telp,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $filename,
        ]);

        return redirect()->route('sekolah.index')->with('success','Post updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bentukpendidikan = ['tk', 'sd', 'smp', 'sma', 'smk'];
        $sekolah = ProfilSekolah::find($id);
        return view('pages.sekolah.edit', compact('sekolah', 'bentukpendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'namasekolah' => 'required',
            // 'npsn' => '',
            'bentukpendidikan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            // 'lintang' => '',
            // 'bujur' => '',
            // 'telp' => '',
            'email' => 'email:rfc,dns',
            'website' => 'url',
            // 'logo' => '',
        ]);

        $data = ProfilSekolah::whereId($id)->first();
        if(\File::exists('storage/'.$data->logo))
        {

        } else {

        };
        
        
        // return redirect('file')->with('success', 'Data is successfully updated');
        // $post = ProfilSekolah::find($id)->update($input); 
        // //  setelah berhasil mengubah data
        // return redirect()->route('sekolah.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
