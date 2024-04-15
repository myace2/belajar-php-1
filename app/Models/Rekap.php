<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    protected $fillable = ['id_rekap','id_karyawan','id_user','id_absensi','id_jabatan','tgl_rekap'];
    protected $primaryKey = 'id_rekap';
    public function Karyawans()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan','id');
    }
    public function Users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function Absensis()
    {
        return $this->belongsTo(Absensi::class, 'id_absensi');
    }
}
