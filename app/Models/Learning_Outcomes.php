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
        return $this->hasMany(CPL_Prodi::class);
    }

    public function verbs()
    {
        return $this->hasMany(Verbs::class, "level_lo", "id");
    }
}
