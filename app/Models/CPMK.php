<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CPMK extends Model
{
    protected $primaryKey = "kodeCPMK";
    public $incrementing = false;
    protected $table = "cpmk";
    protected $fillable = [
        "kodeCPMK",
        "levelCPMK",
        "deskripsiCPMK",
        "kodeCPL",
        "deleted_at",
    ];

    public function lo()
    {
        return $this->belongsTo(Learning_Outcomes::class, "levelCPMK", "id");
    }

    public function CPL()
    {
        return $this->belongsTo(CPL_Prodi::class, "kodeCPL", "kodeCPL");
    }

    public function Mata_Kuliah()
    {
        return $this->belongsToMany(
            Mata_Kuliah::class,
            "detail_mk_cpmk",
            "kodeCPMK",
            "kodeMK"
        );
    }

    public function SubCPMK()
    {
        return $this->hasMany(SubCPMK::class, "kodeCPMK", "kodeCPMK");
    }
}
