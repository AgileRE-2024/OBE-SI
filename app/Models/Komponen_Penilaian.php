<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen_Penilaian extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_komponen_penilaian';
    protected $table = 'komponen_penilaian';
    
    protected $fillable = [
        'id_komponen_penilaian', 'nama_komponen_penilaian','id_rps'
    ];
    
    public function RPS(){
        return $this->belongsTo(RPS::class,'id_rps', 'id_rps');
    }
    
    use HasFactory;
}
