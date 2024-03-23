<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['id','nis','tgl_bayar','id_spp','jumlah_bayar','keterangan','id_user'];
    protected $primaryKey = 'id';
    public function Siswa()

    {
        return $this->belongsTo(Siswa::class, 'nis','nis');
        return $this->belongsTo(Spp::class, 'id_spp','id');
        return $this->belongsTo(Spp::class, 'id_user','id');
    }
}
