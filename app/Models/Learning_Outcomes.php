<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning_Outcomes extends Model
{
    use HasFactory;
    protected $table = "learning_outcomes";

    public function cplProdi()
    {
        return $this->hasMany(CPL_Prodi::class, "levelCPL", "id");
    }

    public function cpmk()
    {
        return $this->hasMany(CPMK::class, "levelCPMK", "id");
    }

    public function subcpmk()
    {
        return $this->hasMany(SubCPMK::class, "levelSubCPMK", "id");
    }

    public function verbs()
    {
        return $this->hasMany(Verbs::class, "level_lo", "id");
    }
}
