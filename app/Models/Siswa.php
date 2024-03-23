<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis','id_kelas','nama','alamat','no_telp'];
    protected $primaryKey = 'nis';
    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas','id');
        return $this->hasMany(Siswa::class, 'nis','nis');

    }
}
