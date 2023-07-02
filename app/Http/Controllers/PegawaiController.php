<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Kontrak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = \App\Models\Pegawai::All();
        $jabatan = \App\Models\Jabatan::All();
        $kontrak = \App\Models\Kontrak::All();
        return view('pegawai.index', ['pegawai' => $pegawai, 'jabatan' => $jabatan, 'kontrak' => $kontrak]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $imagePath = $request->file('foto')->store('/images/');
        $tambah_pegawai = new \App\Models\Pegawai();
        $tambah_pegawai->nip = $request->nip;
        $tambah_pegawai->nm_pegawai = $request->add_nm;
        // $tambah_pegawai->foto = $imagePath;
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();
        $foto->move('images/', $namafile);
        $tambah_pegawai ->foto = $namafile;
        $tambah_pegawai->jkl = $request->jkl;
        $tambah_pegawai->tgl_lahir = $request->tgl_lahir;
        $tambah_pegawai->jabatan = $request->jabatan;
        $tambah_pegawai->kontrak = $request->kontrak;
        $tambah_pegawai->email = $request->email;
        $tambah_pegawai->alamat = $request->alamat;
        $tambah_pegawai->tlp = $request->tlp;
        $tambah_pegawai->save();
    
        Alert::success('Berhasil', 'Data Pegawai berhasil ditambah ');
        return redirect('/pegawai');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $request)
    {

    //    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nip)
    {
        $edit_pegawai = \App\Models\Pegawai::findOrFail($nip);
        $edit_jabatan = \App\Models\Jabatan::All();
        $edit_kontrak = \App\Models\Kontrak::All();
        return view('pegawai.edit', ['pegawai' => $edit_pegawai, 'jabatan' => $edit_jabatan, 'kontrak' => $edit_kontrak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nip)
    {
        // $ubahfile = false;
        // if ($request->hasfile('foto'))
        // {
        //     $file = $request->file('foto');
        //     $namafile = time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/', $namafile);
        // }

        $update_pegawai = \App\Models\Pegawai::findOrFail($nip);

        if($request->has('foto')){
            $update_pegawai->nip = $request->get('nip');
            $update_pegawai->nm_pegawai = $request->get('add_nm');
        // if ($ubahfile){
        //     unlink(public_path().'/images/'.$update_pegawai->foto);
        //     $update_pegawai->foto = $namafile;
        // }
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();
        $foto->move('images/', $namafile);
        $update_pegawai ->foto = $namafile;
        $update_pegawai->jkl = $request->get('jkl');
        $update_pegawai->tgl_lahir = $request->get('tgl_lahir');
        $update_pegawai->jabatan = $request->get('jabatan');
        $update_pegawai->kontrak = $request->get('kontrak');
        $update_pegawai->email = $request->get('email');
        $update_pegawai->alamat = $request->get('alamat');
        $update_pegawai->tlp = $request->get('tlp');
        $update_pegawai->save();
        }


        

        Alert::success('Update Berhasil', 'Data Berhasil di Update');
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pegawai)
    {
        $pegawai = \App\Models\Pegawai::findOrFail($pegawai);
        $pegawai->delete();
        unlink(public_path().'/images/'.$pegawai->foto);

        Alert::success('Di Hapus', 'Data pegawai berhasil di hapus');
        return redirect()->route('pegawai.index');
    }
}
