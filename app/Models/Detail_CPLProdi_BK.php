<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_CPLProdi_BK extends Model
{
    protected $table = 'detail_cplprodi_bk';
    protected $fillable = [
        'kodeCPL', 'kodeBK'
    ];
}
