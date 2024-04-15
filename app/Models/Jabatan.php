<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $fillable = ['nama_jabatan'];
    protected $table = 'jabatan';
    protected $primaryKey = 'id';
    public function Jabatan()
    {
        return $this->hasMany(Jabatan::class, 'id_jabatan','id');
    }
    }

