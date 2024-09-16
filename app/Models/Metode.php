<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    protected $primaryKey = "id_metode";
    public $incrementing = false;
    protected $table = "metodes";
    protected $fillable = ["id_metode", "nama_metode", "deskripsi_metode"];
    public function mingguRPS()
    {
        return $this->belongsToMany(
            Metode::class,
            "detail_metode_mingguRPS",
            "id_metode",
            "kodeMingguRPS"
        );
    }

    use HasFactory;
}
