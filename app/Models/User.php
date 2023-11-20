<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $table = 'users';
    protected $fillable = ['nip', 'namaProdi', 'jabatanDosen', 'namaDosen', 'password', 'email','role','status'];
    protected $hidden = ['remember_token'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAuthIdentifierName()
    {
        return 'nip';
    }

    public function getAuthIdentifier()
    {
        return $this->nip;
    }

    public function RPS_KPS()
    {
        return $this->hasMany(RPS::class, 'nip', 'kps');
    }

    public function RPS()
    {
        return $this->hasMany(Rps::class);
    }

    public function Prodi(){
        return $this->belongsTo(Prodi::class,'namaProdi', 'namaProdi');
    }

    public function Mata_Kuliah(){
        return $this->hasMany(Mata_Kuliah::class,'nip', 'nip');
    }



    // public function RPS1()
    // {
    //     return $this->belongsToMany(RPS::class, 'Detail_Peran_Dosen', 'nip', 'kodeRPS');
    // }
    public function hasRole($role)
    {
        $mapRoles = [
            0 => 'dosen',
            1 => 'kurikulum',
            2 => 'admin'
        ];
        $userRoleName = $mapRoles[$this->role];
        return $userRoleName === $role;
    }
}
