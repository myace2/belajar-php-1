<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    protected $fillable = ['id_spp','keterangan','tahun','nominal'];
    protected $primaryKey = 'id_spp';
    public function Spp()
    {
        return $this->hasMany(Spp::class, 'id_spp','id');

    }
    }

