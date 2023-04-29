<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teknik_Penilaian extends Model
{
    protected $primaryKey = 'kodePenilaian';
    public $incrementing = false;
    protected $table = 'Teknik_Penilaian';
    protected $fillable = [
        'kodePenilaian', 'teknikPenilaian','bobotPenilaian', 'kriteriaPenilaian', 'tahapPenilaian', 'instrumenPenilaian'
    ];

    public function Detail_RPS()
    {
        return $this->hasMany(Detail_RPS::class,'kodePenilaian', 'kodePenilaian');
    }

    public function Detail_Nilai_Mahasiswa()
    {
        return $this->hasMany(Detail_Nilai_Mahasiswa::class,'kodePenilaian', 'kodePenilaian');
    }
}
