<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Penilaian_RPS extends Model
{
    protected $table = "detail_rps";
    protected $fillable = ["kodeRPS", "kodePenilaian"];

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, "nim", "nim");
    }
}
