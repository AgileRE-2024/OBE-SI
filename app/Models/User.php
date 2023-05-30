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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $table = 'users';
    protected $fillable = ['nip', 'jabatanDosen','namaDosen', 'password','email', 'role'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
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
