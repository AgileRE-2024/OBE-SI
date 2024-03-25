<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Media_Minggurps extends Model
{
    protected $table = 'detail_media_minggurps';
    protected $fillable = [
        'id_media', 'kodeMingguRPS'
    ];
    use HasFactory;
}
