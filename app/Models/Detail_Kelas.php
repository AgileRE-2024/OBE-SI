<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Kelas extends Model
{
    protected $table = "detail_kelas";
    protected $fillable = ["nim", "kodeKelas", "SemesterAmbil", "NilaiAkhir"];
    use HasFactory;
}
