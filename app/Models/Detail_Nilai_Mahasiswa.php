<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Nilai_Mahasiswa extends Model
{
    protected $table = 'Detail_Nilai_Mahasiswa';
    public $incrementing = false;
    protected $fillable = [
        'id_rps','nilaiPerTeknik','kodePenilaian','nim'
    ];

    public function RPS(){
        return $this->belongsTo(RPS::class, 'kodeRPS', 'kodeRPS');
    }

    public function Teknik_Penilaian(){
        return $this->belongsTo(Teknik_Penilaian::class, 'kodePenilaian', 'kodePenilaian');
    }
}
