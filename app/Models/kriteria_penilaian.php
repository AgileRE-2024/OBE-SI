<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria_penilaian extends Model
{
    protected $primaryKey = 'id_kriteria_penilaians';
    public $incrementing = false;
    protected $table = 'kriteria_penilaians';
    protected $fillable = [
        'id_kriteria_penilaians', 'nama_kriteria_penilaians','deskripsi_kriteria_penilaians'
    ];
    use HasFactory;
}
