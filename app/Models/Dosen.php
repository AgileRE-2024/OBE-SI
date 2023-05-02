<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $table = 'Dosen';
    protected $fillable = [
        'nip', 'jabatanDosen','namaDosen','email', 'role'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function RPS()
    {
        return $this->hasMany(RPS::class, 'nip', 'kps');
    }
    public function RPS1()
    {
        return $this->belongsToMany(RPS::class, 'Detail_Peran_Dosen', 'nip', 'kodeRPS');
    }
}
