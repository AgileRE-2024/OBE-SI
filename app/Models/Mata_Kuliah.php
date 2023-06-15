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
        'kodeMK', 'namaMK', 'jenisMK', 'sks', 'semester', 'kategoriMK', 'deskripsiMK', 'prasyaratTambahan', 'mat_kodeMK'
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
}
