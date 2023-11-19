<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = 'kodeKelas';
    public $incrementing = false;
    protected $table = 'Kelas';
    protected $fillable = [
        'kodeKelas', 'id_rps', 'namaKelas', 'jadwal', 'kuota','kodeMK','deleted_at'
    ];

    public function Mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'detail_kelas', 'kodeKelas', 'nim');
    }
    public function Mata_Kuliah()
    {
        return $this->belongsTo(Mata_Kuliah::class,'kodeMK', 'kodeMK');
    }
    // public function Nilai_Mahasiswa()
    // {
    //     return $this->hasMany(Nilai_Mahasiswa::class,'kodeKelas', 'kodeKelas');
    // }
}
