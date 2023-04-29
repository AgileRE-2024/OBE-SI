<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_PL_CPLProdi extends Model
{
    protected $table = 'Detail_PL_CPLProdi';
    protected $fillable = [
        'kodePL', 'kodeCPL'
    ];
}
