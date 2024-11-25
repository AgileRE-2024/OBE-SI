<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning_Outcomes extends Model
{
    use HasFactory;
    protected $table = "learning_outcomes";

    protected $fillable = ["level_lo"];

    public function verbs()
    {
        return $this->hasMany(Verbs::class);
    }
}
