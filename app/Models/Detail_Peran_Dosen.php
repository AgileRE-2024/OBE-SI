<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Peran_Dosen extends Model
{
    protected $table = 'Detail_Peran_Dosen';
    protected $fillable = [
        'nip', 'kodeRPS', 'peranDosen'
    ];
}
