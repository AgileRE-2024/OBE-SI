<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCPMK extends Model
{
    protected $primaryKey = "kodeSubCPMK";
    public $incrementing = false;
    protected $table = "subcpmk";
    protected $fillable = [
        "kodeSubCPMK",
        "levelSubCPMK",
        "deskripsiSubCPMK",
        "kriteriaPenilaian",
        "indikatorPenilaian",
        "kodeCPMK",
        "deleted_at",
    ];

    public function lo()
    {
        return $this->belongsTo(Learning_Outcomes::class, "levelSubCPMK", "id");
    }

    public function CPMK()
    {
        return $this->belongsTo(CPMK::class, "kodeCPMK", "kodeCPMK");
    }

    public function Minggu_RPS()
    {
        return $this->hasMany(Minggu_RPS::class, "kodeSubCPMK", "kodeSubCPMK");
    }
}
