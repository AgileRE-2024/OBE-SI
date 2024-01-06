<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minggu_RPS extends Model
{
    protected $primaryKey = 'kodeMingguRPS';
    public $incrementing = false;
    protected $table = 'Minggu_RPS';
    protected $fillable = [
        'kodeMingguRPS', 'id_rps', 'id_kriteria_penilaians', 'kodePenilaian', 'kodeSubCPMK', 'mingguKe','deleted_at', 'luring', 'penugasan','waktuPembelajaran','pengalaman_belajar','bahan_kajian'
    ];

    public function SubCPMK()
    {
        return $this->belongsTo(SubCPMK::class,'kodeSubCPMK', 'kodeSubCPMK');
    }

    public function RPS()
    {
        return $this->belongsTo(RPS::class, 'id_rps', 'id_rps');
    }

    public function PustakaMingguRPS() {
        return $this->hasMany(Detail_Pustaka_Minggurps::class, 'kodeMingguRPS', 'kodeMingguRPS');
    }

    public function Metode()
    {
        return $this->belongsTo(Metode::class, 'id_metode', 'id_metode');
    }

    public function Media()
    {
        return $this->belongsTo(Media::class, 'id_media', 'id_media');
    }

    public function Bentuk()
    {
        return $this->belongsTo(Bentuk::class, 'id_bentuk', 'id_bentuk');
    }

    public function Pustaka(){
        return $this->belongsToMany(pustaka::class, 'detail_pustaka_minggurps', 'kodeMingguRPS', 'id_pustaka');
    }

    public function Teknik_Penilaian(){
        //relasi many to one
        return $this->belongsTo(Teknik_Penilaian::class, 'kodePenilaian', 'kodePenilaian');
    }

    public function Kriteria_Penilaian(){
        //relasi many to one
        return $this->belongsTo(Kriteria_Penilaian::class, 'id_kriteria_penilaians', 'id_kriteria_penilaians');
    }
}
