<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $table = 'Dosen';
    protected $fillable = [
        'nip', 'jabatanDosen','namaDosen', 'password', 'role'
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
