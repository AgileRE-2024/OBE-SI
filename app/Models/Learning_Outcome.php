<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning_Outcome extends Model
{
    use HasFactory;

    protected $table = 'level_LO';

    protected $primaryKey = 'kode';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $fillable = [
        'kode',
        'cognitive_level',
        'kata_kerja',
        'created_at',
        'updated_at',
    ];
}