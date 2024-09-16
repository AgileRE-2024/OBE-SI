<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teknik_Penilaian extends Model
{
    protected $primaryKey = "kodePenilaian";
    public $incrementing = false;
    protected $table = "teknik_penilaian";
    protected $fillable = [
        "kodePenilaian",
        "teknikPenilaian",
        "bobotPenilaian",
        "kriteriaPenilaian",
        "tahapPenilaian",
        "instrumenPenilaian",
    ];

    public function Detail_Nilai_Mahasiswa()
    {
        return $this->hasMany(
            Detail_Nilai_Mahasiswa::class,
            "kodePenilaian",
            "kodePenilaian"
        );
    }

    public function RPS()
    {
        return $this->belongsToMany(
            Teknik_Penilaian::class,
            "detail_penilaian_rps",
            "kodePenilaian",
            "id_RPS"
        );
    }

    public function Minggu_RPS()
    {
        //relasi one to many
        return $this->hasMany(
            Minggu_RPS::class,
            "kodePenilaian",
            "kodePenilaian"
        );
    }
}
