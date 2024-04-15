<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function index()  {
        $jabatan = Jabatan::all();
        return view('home.jabatan.index', compact(['jabatan']));

    }

    function create() {
        return view('home.jabatan.tambah');
    }
    
    function store(Request $request)  {
        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
            $request->except(['_token']),
        ]);
        return redirect('/jabatan');
    }

    function destroy($id)  {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('/jabatan');
    }

    function show($id)  {
        $jabatan = Jabatan::find($id);
        return view('home.jabatan.edit',compact(['jabatan']));
    }

    function update($id, Request $request)  {
        $jabatan = Jabatan::find($id);
        $jabatan->update([
            'nama_jabatan' => $request->nama_jabatan,
            $request->except(['_token']),
        ]);
        return redirect('/jabatan');
    }
}
