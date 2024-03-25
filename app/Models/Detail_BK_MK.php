<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_BK_MK extends Model
{
    protected $table = 'detail_bk_mk';
    protected $fillable = ['kodeBK', 'kodeMK'];
    public $timestamps = false;
}
