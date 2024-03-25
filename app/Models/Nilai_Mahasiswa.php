<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai_Mahasiswa extends Model
{
    protected $table = 'nilai_mahasiswa';
    protected $primaryKey = 'kodeNilai';
    public $incrementing = false;
    protected $fillable = ['kodeNilai','nim', 'kodeKelas', 'kodeRPS', 'semesterAmbil', 'nilaiAkhir'];

    public function RPS()
    {
        return $this->belongsTo(RPS::class,'kodeRPS', 'kodeRPS');
    }

    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class,'nim', 'nim');
    }

    public function Kelas()
    {
        return $this->hasMany(Kelas::class,'kodeKelas', 'kodeKelas');
    }

    public function Detail_Nilai_Mahasiswa()
    {
        return $this->hasMany(Detail_Nilai_Mahasiswa::class,'kodeNilai', 'kodeNilai');
    }
}
