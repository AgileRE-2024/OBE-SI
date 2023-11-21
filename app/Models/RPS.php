<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RPS extends Model
{
    protected $primaryKey = 'id_rps';
    public $incrementing = false;
    protected $table = 'RPS';
    protected $fillable = [
        'id_rps', 'tahunAjaran','semester', 'kodeMK', 'kps'
    ];

    public function Mata_Kuliah()
    {
        return $this->belongsTo(Mata_Kuliah::class, 'kodeMK', 'kodeMK');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'kps', 'nip');
    }

    public function User1()
    {
        return $this->belongsToMany(User::class, 'Detail_Peran_Dosen', 'kodeRPS', 'nip');
    }
    
    public function Minggu_RPS()
    {
        return $this->belongsToMany(Minggu_RPS::class, 'Detail_RPS', 'kodeRPS', 'kodeMingguRPS');
    }

    public function Nilai_Mahasiwa()
    {
        return $this->hasMany(Nilai_Mahasiwa::class,'kodeRPS', 'kodeRPS');
    }
}
