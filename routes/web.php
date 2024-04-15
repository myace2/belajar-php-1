<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::group(['middleware'=> ['auth']], function(){});

Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah', [UserController::class,'create']);
Route::post('/user/simpan', [UserController::class,'store']);
Route::get('/user/{id}/hapus', [UserController::class,'destroy']);
Route::get('/user/{id}/edit', [UserController::class,'show']);
Route::post('/user/{id}/update', [UserController::class,'update']);

Route::get('/jabatan', [JabatanController::class,'index']);
Route::get('/jabatan/tambah', [JabatanController::class,'create']);
Route::post('/jabatan/simpan', [JabatanController::class,'store']);
Route::get('/jabatan/{id}/hapus', [JabatanController::class,'destroy']);
Route::get('/jabatan/{id}/edit', [JabatanController::class,'show']);
Route::post('/jabatan/{id}/update', [JabatanController::class,'update']);


Route::get('/absensi', [AbsensiController::class,'index']);
Route::get('/absensi/tambah', [AbsensiController::class,'create']);
Route::post('/absensi/simpan', [AbsensiController::class,'store']);
Route::get('/absensi/{id}/hapus', [AbsensiController::class,'destroy']);
Route::get('/absensi/{id}/edit', [AbsensiController::class,'show']);
Route::post('/absensi/{id}/update', [AbsensiController::class,'update']);


Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/tambah', [KaryawanController::class,'create']);
Route::post('/karyawan/simpan', [KaryawanController::class,'store']);
Route::get('/karyawan/{id}/hapus', [KaryawanController::class,'destroy']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class,'show']);
Route::post('/karyawan/{id}/update', [KaryawanController::class,'update']);

Route::get('/rekap', [RekapController::class,'index']);
Route::get('/rekap/tambah', [RekapController::class,'create']);
Route::post('/rekap/simpan', [RekapController::class,'store']);
Route::get('/rekap/{id}/hapus', [RekapController::class,'destroy']);
Route::get('/rekap/{id}/edit', [RekapController::class,'show']);
Route::post('/rekap/{id}/update', [RekapController::class,'update']);
Route::get('/rekap/{id}/struk', [RekapController::class,'struk']);
Route::get('/rekap/cetak', [RekapController::class,'cetak']);


?>
