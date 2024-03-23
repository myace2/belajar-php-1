<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    function index()  {
        $kelas = Kelas::all();
        return view('home.kelas.index', compact(['kelas']));

    }

    function create() {
        return view('home.kelas.tambah');
    }
    
    function store(Request $request)  {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            $request->except(['_token']),
        ]);
        return redirect('/kelas');
    }

    function destroy($id)  {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas');
    }

    function show($id)  {
        $kelas = Kelas::find($id);
        return view('home.kelas.edit',compact(['kelas']));
    }

    function update($id, Request $request)  {
        $kelas = Kelas::find($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            $request->except(['_token']),
        ]);
        return redirect('/kelas');
    }
}
