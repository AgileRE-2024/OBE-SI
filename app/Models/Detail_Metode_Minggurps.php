<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Metode_Minggurps extends Model
{
    protected $table = 'detail_metode_minggurps';
    protected $fillable = [
        'id_metode', 'kodeMingguRPS'
    ];
    use HasFactory;
}
