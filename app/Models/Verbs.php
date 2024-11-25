<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verbs extends Model
{
    protected $table = "verbs";
    protected $fillable = ["level_lo", "kata_kerja"];
    public $timestamps = false;

    public function learningOutcomes()
    {
        return $this->belongsTo(
            Learning_Outcomes::class,
            "level_lo",
            "level_lo"
        );
    }
}
