<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil_Lulusan extends Model
{
    protected $primaryKey = 'kodePL';
    public $incrementing = false;
    protected $table = 'Profil_Lulusan';
    protected $fillable = [
        'kodePL', 'deskripsiPL','namaPL'
    ];

    public function CPL_Prodi()
    {
        return $this->belongsToMany(CPL_Prodi::class, 'Detail_PL_CPLProdi', 'kodePL', 'kodeCPL');
    }
}
