<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCPMK extends Model
{
    protected $primaryKey = 'kodeSubCPMK';
    public $incrementing = false;
    protected $table = 'SubCPMK';
    protected $fillable = [
        'kodeSubCPMK', 'deskripsiSubCPMK','kodeCPMK'
    ];

    public function CPMK()
    {
        return $this->belongsTo(CPMK::class,'kodeCPMK', 'kodeCPMK');
    }

    public function Minggu_RPS()
    {
        return $this->hasMany(Minggu_RPS::class,'kodeSubCPMK', 'kodeSubCPMK');
    }
}
