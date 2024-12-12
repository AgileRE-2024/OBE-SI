<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknik_Penilaian_RPS extends Model
{
    protected $primaryKey = "id_teknik_penilaian";
    public $incrementing = false;
    protected $table = "teknik_penilaian_rps";
    protected $fillable = [
        "id_teknik_penilaian",
        "nama_teknik_penilaian",
        "deskripsi_teknik_penilaian",
    ];

    public function Minggu_RPS()
    {
        return $this->hasMany(
            Minggu_RPS::class,
            "id_teknik_penilaian",
            "id_teknik_penilaian"
        );
    }
    use HasFactory;
}
