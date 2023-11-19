<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bentuk extends Model
{

    public function mingguRPS(){
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'id_bentuk', 'kodeMingguRPS');
    }

    use HasFactory;
}
