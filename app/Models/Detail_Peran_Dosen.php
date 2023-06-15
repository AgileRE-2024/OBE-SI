<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Peran_Dosen extends Model
{
    protected $primaryKey = 'nip';
    protected $table = 'Detail_Peran_Dosen';
    protected $fillable = [
        'nip', 'kodeRPS', 'peranDosen'
    ];
    public function users()
{
    return $this->belongsTo(User::class, 'nip', 'nip');
}
public function rpss()
{
    return $this->belongsTo(RPS::class, 'kodeRPS', 'kodeRPS');
}
}