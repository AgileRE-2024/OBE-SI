<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CPMK extends Model
{
    protected $primaryKey = 'kodeCPMK';
    public $incrementing = false;
    protected $table = 'CPMK';
    protected $fillable = [
        'kodeCPMK', 'deskripsiCPMK','kodeCPL','deleted_at'
    ];

    public function CPL()
    {
        return $this->belongsTo(CPL_Prodi::class, 'kodeCPL', 'kodeCPL');
    }

    public function Mata_Kuliah()
    {
        return $this->belongsToMany(Mata_Kuliah::class, 'Detail_MK_CPMK', 'kodeCPMK', 'kodeMK');
    }

    public function SubCPMK()
    {
        return $this->hasMany(SubCPMK::class,'kodeCPMK', 'kodeCPMK');
    }
}