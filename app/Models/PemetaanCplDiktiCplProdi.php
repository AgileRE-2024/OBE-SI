<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemetaanCplDiktiCplProdi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = 'pemetaan_cpld_cplp';

    public function CplDikti(){
        return $this->belongsTo(CplDikti::class);
    }

    public function CplProdi(){
        return $this->belongsTo(CplProdi::class);
    }
}
