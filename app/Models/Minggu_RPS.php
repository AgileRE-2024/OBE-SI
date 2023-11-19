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
        return $this->belongsToMany(RPS::class, 'Detail_RPS', 'kodeMingguRPS', 'kodeRPS');
    }

    public function metode()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_metode');
    }

    public function media()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_media');
    }

    public function bentuk()
    {
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'kodeMingguRPS', 'id_bentuk');
    }
}