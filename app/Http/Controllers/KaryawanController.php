<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()  {
        $karyawan = Karyawan::all();
        return view('home.karyawan.index', compact(['karyawan']));
    }

    public function create() {
        $jabatan = Jabatan::All();
        return view('home.karyawan.tambah',compact('jabatan'));
    }
    
    function store(Request $request)  {
        Karyawan::create([
            'id_karyawan' => $request->id_karyawan,
            'nama' => $request->nama,
            'id_jabatan' => $request->id_jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/karyawan');
    }

    function destroy($id)  {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }

    function show($id)  {
        $jabatan = Jabatan::All();
        $karyawan = Karyawan::find($id);
        return view('home.karyawan.edit',compact(['karyawan','jabatan']));
    }

    function update($id, Request $request)  {
        $jabatan = Jabatan::All();
        $karyawan = karyawan::find($id);
        $karyawan->update([
            'nama' => $request->nama,
            'id_karyawan' => $request->id_karyawan,
            'nama_jabatan' => $request->nama_jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/karyawan');
    }
}
