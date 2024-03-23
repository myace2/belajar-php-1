<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = ['nama_kelas','kompetensi_keahlian'];
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    public function Kelas()
    {
        return $this->hasMany(Kelas::class, 'id_kelas','id');
    }
    }

