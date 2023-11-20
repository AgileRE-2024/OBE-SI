<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Penilaian extends Model
{

    public function Minggu_RPS(){
        //relasi one to many
        return $this->hasMany(Minggu_RPS::class, 'kodePenilaian', 'kodePenilaian');
    }
    use HasFactory;
}
