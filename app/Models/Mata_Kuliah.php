<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mata_Kuliah extends Model
{
    protected $primaryKey = 'kodeMK';
    // protected $nullable = 'mat_kodeMK';
    public $incrementing = false;
    protected $table = 'Mata_Kuliah';
    protected $fillable = [
        'kodeMK', 'namaProdi', 'nip', 'namaMK', 'jenisMK', 'sks', 'mat_kodeMK', 'semester', 'kategoriMK', 'deskripsiMK', 'prasyaratTambahan', 'penanggung_jawab', 'pengampu', 'deleted_at'
    ];

    public function Bahan_Kajian()
    {
        return $this->belongsToMany(Bahan_Kajian::class, 'Detail_BK_MK', 'kodeMK', 'kodeBK');
    }

    // public function Mata_Kuliah()
    // {
    //     return $this->hasMany(Mata_Kuliah::class);
    // }

    public function RPS()
    {
        return $this->hasMany(RPS::class, 'kodeMK', 'kodeMK');
    }

    public function CPMK()
    {
        return $this->belongsToMany(CPMK::class, 'Detail_MK_CPMK', 'kodeMK', 'kodeCPMK');
    }

    public function Kelas()
    {
        return $this->hasMany(Kelas::class, 'kodeMK', 'kodeMK');
    }

    public function Prasyarat()
    {
        return $this->belongsToMany(Mata_Kuliah::class, 'Prasyarat', 'kodeMK', 'mat_kodeMK');
    }

    public function User(){
        return $this->belongsTo(User::class, 'nip','nip');
    }

}
