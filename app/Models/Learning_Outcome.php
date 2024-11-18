<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning_Outcome extends Model
{
    use HasFactory;

    protected $table = 'level_LO';

    protected $fillable = [
        'level',
        'cognitive_level',
        'kata_kerja',
        'created_at',
        'updated_at',
    ];
}
