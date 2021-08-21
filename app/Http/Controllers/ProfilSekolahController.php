<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

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
        return view('pages.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            // 'email' => '',
            // 'website' => '',
            // 'logo' => '',
        ]);

        // $profilSekolah->update($request->all());
        $post = ProfilSekolah::find($id)->update($request->all()); 
        // //  setelah berhasil mengubah data
        return redirect()->route('sekolah.index')->with('success','Post updated successfully');
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
