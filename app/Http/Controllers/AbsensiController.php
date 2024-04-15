<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    function index()  {
        $absensi = Absensi::all();
        return view('home.absensi.index', compact(['absensi']));

    }

    function create() {
        $absensi = Absensi::all();
        return view('home.absensi.tambah', compact(['absensi']));
    }
    
    function store(Request $request)  {
        Absensi::create([
            'id_absensi' => $request->id_absensi,
            'tanggal_absen' => $request->tanggal_absen,
            'jenis_absen' => $request->jenis_absen,
            $request->except(['_token']),
        ]);
        return redirect('/absensi');
    }

    function destroy($id)  {
        $absensi = Absensi::find($id);
        $absensi->delete();
        return redirect('/absensi');
    }

    function show($id)  {
        $absensi = Absensi::find($id);
        return view('home.absensi.edit',compact(['absensi']));
    }

    function update($id, Request $request)  {
        $absensi = Absensi::find($id);
        $absensi->update([
            'id_absen' => $request->id_absen,
            'tanggal_absen' => $request->tanggal_absen,
            'jenis_absen' => $request->jenis_absen,
            $request->except(['_token']),
        ]);
        return redirect('/absensi');
    }
}
