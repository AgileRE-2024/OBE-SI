<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_CPLSN_CPLProdi extends Model
{
    use HasFactory;
    protected $table = 'Detail_CPLSN_CPLProdi';
    protected $fillable = [
        'kode_cpldikti', 'kode_cplprodi'
    ];
}
