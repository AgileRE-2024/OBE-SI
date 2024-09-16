<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Penilaian extends Model
{
    protected $primaryKey = "id_kriteria_penilaians";
    public $incrementing = false;
    protected $table = "kriteria_penilaians";
    protected $fillable = [
        "id_kriteria_penilaians",
        "nama_kriteria_penilaians",
        "deskripsi_kriteria_penilaians",
    ];

    public function Minggu_RPS()
    {
        //relasi one to many
        return $this->hasMany(
            Minggu_RPS::class,
            "kodePenilaian",
            "kodePenilaian"
        );
    }
    use HasFactory;
}
