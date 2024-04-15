<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Rekap;
use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_karyawan = Karyawan::count();
        $jumlah_jabatan = Jabatan::count();
        $rekaps = Rekap::Select()->orderBy('tgl_rekap')
                    ->limit(5)
                    ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        
        return view('home.dashboard', compact('rekaps'));
}
}
