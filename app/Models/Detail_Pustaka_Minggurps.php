<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pustaka_Minggurps extends Model
{
    protected $table = 'Detail_Pustaka_Minggurps';
    protected $fillable = [
        'id_pustaka', 'kodeMingguRPS'
    ];
use HasFactory;
}
