<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $table = 'Mahasiswa';
    protected $fillable = ['nim', 'namaMahasiswa', 'tahunMasuk','deleted_at'];

    public function Nilai_Mahasiswa()
    {
        return $this->hasMany(Nilai_Mahasiswa::class,'nim', 'nim');
    }

    public function kelas(){
        return $this->belongsToMany(Mahasiswa::class, 'detail_kelas','nim','kodeKelas');
    }
}
