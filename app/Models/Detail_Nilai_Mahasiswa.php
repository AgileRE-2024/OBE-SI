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

    public function Teknik_Penilaian()
    {
        return $this->belongsTo(Teknik_Penilaian::class,'kodePenilaian', 'kodePenilaian');
    }

    public function Nilai_Mahasiswa()
    {
        return $this->belongsTo(Nilai_Mahasiswa::class,'kodeNilai', 'kodeNilai');
    }
}
