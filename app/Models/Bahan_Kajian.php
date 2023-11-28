<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan_Kajian extends Model
{
    protected $primaryKey = 'kodeBK';
    public $incrementing = false;
    protected $table = 'Bahan_Kajian';
    protected $fillable = ['kodeBK', "namaBK", "kategoriBK", "referensiBK", 'deleted_at'];

    public function CPL_Prodi()
    {
        return $this->belongsToMany(CPL_Prodi::class, 'Detail_CPLProdi_BK', 'kodeBK', 'kodeCPL');
    }

    public function Mata_Kuliah()
    {
        return $this->belongsToMany(Mata_Kuliah::class, 'Detail_BK_MK', 'kodeBK', 'kodeMK');
    }
}
