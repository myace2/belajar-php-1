<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_siswa = Siswa::count();
        $jumlah_kelas = Kelas::count();
        $pembayaran = Pembayaran::Select()->orderBy('tgl_bayar', 'desc')
                    ->limit(5)
                    ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total_minggu = Pembayaran::Select (Pembayaran::raw('SUM(jumlah_bayar) as
total_price'))
                ->whereBetween('tgl_bayar', [$today, $endDate])->first();
        return view('home.dashboard', compact('pembayaran', 'jumlah_siswa', 'jumlah_kelas'), ['total_minggu' => $total_minggu]);
}
}
