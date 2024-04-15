<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Rekap;
use App\Models\Jabatan;
use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()  {
        $rekap = Rekap::all();
        return view('home.rekap.index', compact(['rekap']));
        
    }
    
    public function create() {
        $jabatan=Jabatan::All();
        $karyawan = Karyawan::All();
        $user = User::All();
        $absensi = Absensi::All();
        return view('home.rekap.tambah',compact('jabatan' ,'karyawan', 'user', 'absensi'));
    }

    public function cetak() {
        $jabatan=Jabatan::All();
        $karyawan = Karyawan::All();
        $user = User::All();
        $absensi = Absensi::All();
        $rekap = Rekap::all();
        return view('home.rekap.cetak', compact('rekap','jabatan' ,'karyawan', 'user', 'absensi'));
    }

    public function struk($id) {
        $jabatan=Jabatan::All();
        $karyawan = Karyawan::All();
        $user = User::All();
        $absensi = Absensi::All();
        $rekap = Rekap::find($id);
        return view('home.rekap.struk', compact('rekap','jabatan' ,'karyawan', 'user', 'absensi'));
    }
    
    function store(Request $request)  {
        Rekap::create([
            'id_rekap' => $request->id_rekap,
            'id_karyawan' => $request->id_karyawan,
            'id_user' => $request->id_user,
            'id_absensi' => $request->id_absensi,
            'id_jabatan' => $request->id_jabatan,
            'tgl_rekap' => $request->tgl_rekap,
            $request->except(['_token']),
        ]);
        return redirect('/rekap');
    }

    function destroy($id)  {
        $rekap = Rekap::find($id);
        $rekap->delete();
        return redirect('/rekap');
    }

    function show($id)  {
        $jabatan=Jabatan::All();
        $karyawan = Karyawan::All();
        $user = User::All();
        $absensi = Absensi::All();
        $rekap = Rekap::find($id);
        return view('home.rekap.edit',compact(['rekap','jabatan' ,'karyawan', 'user', 'absensi']));
    }

    function update($id, Request $request)  {
        
        $rekap = Rekap::find($id);
        $rekap->update([
            // 'id_rekap' => $request-> id_rekap,
            'id_karyawan' => $request->id_karyawan,
            'id_user' => $request->id_user,
            'id_absensi' => $request->id_absensi,
            'id_jabatan' => $request->id_jabatan,
            'tgl_rekap' => $request->tgl_rekap,
            $request->except(['_token']),
        ]);
        return redirect('/rekap');
    }
}
