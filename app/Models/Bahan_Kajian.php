<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan_Kajian extends Model
{
    protected $primaryKey = "kodeBK";
    public $incrementing = false;
    protected $table = "bahan_kajian";
    protected $fillable = [
        "kodeBK",
        "namaBK",
        "kategoriBK",
        "referensiBK",
        "deleted_at",
    ];

    public function CPL_Prodi()
    {
        return $this->belongsToMany(
            CPL_Prodi::class,
            "detail_cplprodi_bk",
            "kodeBK",
            "kodeCPL"
        );
    }

    public function Mata_Kuliah()
    {
        return $this->belongsToMany(
            Mata_Kuliah::class,
            "detail_bk_mk",
            "kodeBK",
            "kodeMK"
        );
    }
}
