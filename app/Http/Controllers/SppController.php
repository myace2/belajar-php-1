<?php

namespace App\Http\Controllers;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    function index()  {
        $spp = Spp::all();
        return view('home.spp.index', compact(['spp']));

    }

    function create() {
        return view('home.spp.tambah');
    }
    
    function store(Request $request)  {
        Spp::create([
            'keterangan' => $request->keterangan,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            $request->except(['_token']),
        ]);
        return redirect('/spp');
    }

    function destroy($id)  {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('/spp');
    }

    function show($id)  {
        $spp = Spp::find($id);
        return view('home.spp.edit',compact(['spp']));
    }

    function update($id, Request $request)  {
        $spp = Spp::find($id);
        $spp->update([
            'keterangan' => $request->keterangan,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            $request->except(['_token']),
        ]);
        return redirect('/spp');
    }
}
