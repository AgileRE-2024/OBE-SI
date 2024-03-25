<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPL_SN_Dikti extends Model
{
    protected $primaryKey = 'kodeCPLSN';
    public $incrementing = false;
    protected $table = 'cpl_sn_dikti';
    protected $fillable = [
        'kodeCPLSN', 'deskripsiSN', 'sumberSN', "kategoriSN", "jenisSN", 'deleted_at'
    ];

    public function CPL_Prodi()
    {
        return $this->belongsToMany(CPL_Prodi::class, 'Detail_SN_CPLProdi', 'kodeCPLSN', 'kodeCPL');
    }
}
