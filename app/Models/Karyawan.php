<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['id_karyawan','nama','id_jabatan','alamat','no_telp'];
    protected $table = 'karyawans';
    protected $primaryKey = 'id_karyawan';
    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan','id');
    }
    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class, 'id_karyawan');
    }

}
