<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilLulusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pemetaanPlCpls(){
        return $this->hasMany(PemetaanPlCpl::class,'kodePL','kodePL');
    }

}
