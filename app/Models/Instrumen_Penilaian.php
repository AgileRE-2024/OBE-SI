<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumen_Penilaian extends Model
{
    protected $primaryKey = 'id_instrumen_penilaian';
    public $incrementing = false;
    protected $table = 'instrumen_penilaian';
    protected $fillable = [
        'id_instrumen_penilaian', 'nama_instrumen_penilaian','deskripsi_instrumen_penilaian'
    ];

    public function Minggu_RPS(){
        //relasi one to many
        return $this->hasMany(Minggu_RPS::class, 'id_instrumen_penilaian', 'id_instrumen_penilaian');
    }
    use HasFactory;
}
