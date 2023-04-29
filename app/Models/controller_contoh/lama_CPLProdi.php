<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPLProdi extends Model
{
    use HasFactory;

    protected $table = 'cpl_prodis';
    protected $guarded = ['id'];

    public function pemetaanPlCpls(){
        return $this->hasMany(PemetaanPlCpl::class,'kodeCPL','kodeCPL');
    }

}
