<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPL_Prodi extends Model
{
    protected $primaryKey = 'kodeCPL';
    public $incrementing = false;
    protected $table = 'cpl_prodi';
    protected $fillable = [
        'kodeCPL', "deskripsiCPL", "referensiCPL","deleted_at"
    ];

    public function CPL_SN_Dikti()
    {
        return $this->belongsToMany(CPL_SN_Dikti::class, 'detail_sn_cplprodi', 'kodeCPL', 'kodeCPLSN');
    }

    public function Profil_Lulusan()
    {
        return $this->belongsToMany(Profil_Lulusan::class, 'detail_pl_cplprodi', 'kodeCPL', 'kodePL');
    }

    public function Bahan_Kajian()
    {
        return $this->belongsToMany(Bahan_Kajian::class, 'detail_cplprodi_bk', 'kodeCPL', 'kodeBK');
    }

    public function CPMK()
    {
        return $this->hasMany(CPMK::class, 'kodeCPL', 'kodeCPL');
    }
}
