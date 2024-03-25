<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Bentuk_Minggurps extends Model
{
    protected $table = 'detail_bentuk_minggurps';
    protected $fillable = [
        'id_bentuk', 'kodeMingguRPS'
    ];
    use HasFactory;
}
