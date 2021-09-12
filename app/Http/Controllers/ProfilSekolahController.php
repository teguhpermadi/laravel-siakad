<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilSekolahRequest;
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
    public function store(ProfilSekolahRequest $request)
    {
        // jika ada file logo yang diupload simpan di storage
        if($request->hasFile('file'))
        {
            $path = $request->file('file')->store('images');
            $request->merge([
                'logo' => $path,
            ]);
        }

        // hapus request dengan nama file
        $input = $request->except(['file']);
        // simpan data di db
        $data = ProfilSekolah::create($input);        
        return redirect()->route('sekolah.index')->with('success','Data added successfully');
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
    public function update(ProfilSekolahRequest $request, $id)
    {
        // jika ada file logo yang diupload simpan di storage
        if($request->hasFile('file'))
        {
            // hapus dulu file yang lama
            Storage::delete($request->oldfile);

            $path = $request->file('file')->store('images');
        } else {
            $path = $request->oldfile;
        }
        
        $request->merge([
            'logo' => $path,
        ]);
        // hapus request dengan nama file
        $input = $request->except(['file', 'oldfile', '_method', '_token']);
        // update data di db
        $data = ProfilSekolah::whereId($id)->update($input);
        
        
        
        // return redirect('file')->with('success', 'Data is successfully updated');
        // $post = ProfilSekolah::find($id)->update($input); 
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
            $data = ProfilSekolah::find($id); 
            $data->delete();
            return redirect()->route('sekolah.index')->with('success','Profil Sekolah deleted successfully');
    }
}
