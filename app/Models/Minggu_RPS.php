<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minggu_RPS extends Model
{
    protected $primaryKey = "kodeMingguRPS";
    public $incrementing = false;
    protected $table = "minggu_rps";
    protected $fillable = [
        "kodeMingguRPS",
        "id_rps",
        "id_teknik_penilaian",
        "id_kriteria_penilaians",
        "id_komponen_penilaian",
        "bobot_nilai",
        "kodePenilaian",
        "kodeSubCPMK",
        "mingguKe",
        "deleted_at",
        "luring",
        "penugasan",
        "waktuPembelajaran",
        "pengalaman_belajar",
        "bahan_kajian",
    ];

    public function SubCPMK()
    {
        return $this->belongsTo(SubCPMK::class, "kodeSubCPMK", "kodeSubCPMK");
    }

    public function RPS()
    {
        return $this->belongsTo(RPS::class, "id_rps", "id_rps");
    }

    public function PustakaMingguRPS()
    {
        return $this->hasMany(
            Detail_Pustaka_Minggurps::class,
            "kodeMingguRPS",
            "kodeMingguRPS"
        );
    }

    public function Metode()
    {
        return $this->belongsToMany(
            Metode::class,
            "detail_metode_minggurps",
            "kodeMingguRPS",
            "id_metode"
        );
    }

    public function Media()
    {
        return $this->belongsTo(Media::class, "id_media", "id_media");
    }

    public function Bentuk()
    {
        return $this->belongsTo(Bentuk::class, "id_bentuk", "id_bentuk");
    }

    public function Pustaka()
    {
        return $this->belongsToMany(
            Pustaka::class,
            "detail_pustaka_minggurps",
            "kodeMingguRPS",
            "id_pustaka"
        );
    }

    public function Teknik_Penilaian()
    {
        //relasi many to one
        return $this->belongsTo(
            Teknik_Penilaian::class,
            "kodePenilaian",
            "kodePenilaian"
        );
    }

    public function Kriteria_Penilaian()
    {
        //relasi many to one
        return $this->belongsTo(
            Kriteria_Penilaian::class,
            "id_kriteria_penilaians",
            "id_kriteria_penilaians"
        );
    }

    public function Teknik_Penilaian_RPS()
    {
        //relasi many to one
        return $this->belongsTo(
            Teknik_Penilaian_RPS::class,
            "id_teknik_penilaian",
            "id_teknik_penilaian"
        );
    }

    public function Instrumen_Penilaian()
    {
        //relasi many to one
        return $this->belongsTo(
            Instrumen_Penilaian::class,
            "id_instrumen_penilaian",
            "id_instrumen_penilaian"
        );
    }

    public function Komponen_Penilaian()
    {
        //relasi many to one
        return $this->belongsTo(
            Komponen_Penilaian::class,
            "id_komponen_penilaian",
            "id_komponen_penilaian"
        );
    }
}
