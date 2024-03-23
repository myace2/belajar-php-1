<?php

namespace App\Http\Controllers;
use App\Models\pembayaran;
use App\Models\kelas;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    public function index()  {
        $pembayaran = pembayaran::all();
        return view('home.pembayaran.index', compact(['pembayaran']));

    }

    public function create() {
        $kelas=Kelas::All();
        
        return view('home.pembayaran.tambah',compact('kelas'));
        
    }
    
    function store(Request $request)  {
        pembayaran::create([
            'id' => $request->id,
            'nis' => $request->nis,
            'tgl_bayar' => $request->tgl_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
            'keterangan' => $request->keterangan,
            'id_user' => $request->id_user,
            $request->except(['_token']),
        ]);
        return redirect('/pembayaran');
    }

    function destroy($id)  {
        $pembayaran = pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');
    }

    function show($id)  {
        $pembayaran = pembayaran::find($id);
        return view('home.pembayaran.edit',compact(['pembayaran']));
    }

    function update($id, Request $request)  {
        $pembayaran = pembayaran::find($id);
        $pembayaran->update([
            'id' => $request->id,
            'nis' => $request->nis,
            'tgl_bayar' => $request->tgl_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
            'keterangan' => $request->keterangan,
            'id_user' => $request->id_user,
            $request->except(['_token']),
        ]);
        return redirect('/pembayaran');
    }
}
