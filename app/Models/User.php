<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_user',
        'username',
        'password',
        'id_jabatan',
        'alamat',
        'no_telepon',
    ];
    public function User()
    {
        return $this->hasMany(User::class, 'id_user', 'id');
        return $this->belongsTo(User::class, 'id_user','id');

    }
    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan','id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];
}
