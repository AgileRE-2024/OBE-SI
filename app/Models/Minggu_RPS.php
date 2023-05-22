<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minggu_RPS extends Model
{
    protected $primaryKey = 'kodeMingguRPS';
    public $incrementing = false;
    protected $table = 'Minggu_RPS';
    protected $fillable = [
        'kodeMingguRPS', 'kodeSubCPMK', 'mingguKe', 'bentukPembelajaran', 'indikatorMingguRPS', 'kriteriaMingguRPS', 'deskripsiPembelajaran', 'materiPembelajaran'
    ];

    public function SubCPMK()
    {
        return $this->belongsTo(SubCPMK::class,'kodeSubCPMK', 'kodeSubCPMK');
    }
    
    public function RPS()
    {
        return $this->belongsToMany(RPS::class, 'Detail_RPS', 'kodeMingguRPS', 'kodeRPS');
    }

}
