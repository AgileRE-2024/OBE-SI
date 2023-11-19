<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPL_Prodi extends Model
{
    protected $primaryKey = 'kodeCPL';
    public $incrementing = false;
    protected $table = 'CPL_Prodi';
    protected $fillable = [
        'kodeCPL', "deskripsiCPL", "referensiCPL","deleted_at"
    ];

    public function CPL_SN_Dikti()
    {
        return $this->belongsToMany(CPL_SN_Dikti::class, 'Detail_SN_CPLProdi', 'kodeCPL', 'kodeCPLSN');
    }

    public function Profil_Lulusan()
    {
        return $this->belongsToMany(Profil_Lulusan::class, 'Detail_PL_CPLProdi', 'kodeCPL', 'kodePL');
    }

    public function Bahan_Kajian()
    {
        return $this->belongsToMany(Bahan_Kajian::class, 'Detail_CPLProdi_BK', 'kodeCPL', 'kodeBK');
    }

    public function CPMK()
    {
        return $this->hasMany(CPMK::class, 'kodeCPL', 'kodeCPL');
    }
}
