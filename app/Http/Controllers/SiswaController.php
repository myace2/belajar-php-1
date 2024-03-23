<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use App\Models\kelas;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()  {
        $siswa = siswa::all();
        return view('home.siswa.index', compact(['siswa']));

    }

    public function create() {
        $kelas=Kelas::All();
        
        return view('home.siswa.tambah',compact('kelas'));
        
    }
    
    function store(Request $request)  {
        siswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/siswa');
    }

    function destroy($id)  {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }

    function show($id)  {
        $siswa = siswa::find($id);
        return view('home.siswa.edit',compact(['siswa']));
    }

    function update($id, Request $request)  {
        $siswa = siswa::find($id);
        $siswa->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/siswa');
    }
}
