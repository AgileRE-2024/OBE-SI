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

    public function Metode()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_metode');
    }

    public function Media()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_media');
    }

    public function Bentuk()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_bentuk');
    }

    public function Pustaka(){
        return $this->belongsToMany(Pustaka::class, 'detail_pustaka_minggurps', 'kodeMingguRPS', 'id_pustaka');
    }

    public function Teknik_Penilaian(){
        //relasi many to one
        return $this->belongsTo(Teknik_Penilaian::class, 'kodePenilaian', 'kodePenilaian');
    }

    public function Kriteria_Penilaian(){
        //relasi many to one
        return $this->belongsTo(Kriteria_Penilaian::class, 'kodePenilaian', 'kodePenilaian');
    }
}
