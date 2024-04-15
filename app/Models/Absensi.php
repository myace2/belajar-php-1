<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = ['id_absensi','tanggal_absen','jenis_absen'];
    protected $primaryKey = 'id_absensi';
    public function Absensis()
    {
        return $this->hasMany(Absensi::class, 'id_absensi');
        return $this->belongsTo(Absensi::class, 'id_absensi');


    }
    }

