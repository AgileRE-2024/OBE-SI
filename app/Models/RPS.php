<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RPS extends Model
{
    protected $primaryKey = 'id_RPS';
    public $incrementing = false;
    protected $table = 'RPS';
    protected $fillable = [
        'kodeRPS', 'tahunAjaran','pustaka', 'kodeMK'
    ];

    public function Mata_Kuliah()
    {
        return $this->belongsTo(Mata_Kuliah::class, 'kodeMK', 'kodeMK');
    }

    // public function User()
    // {
    //     return $this->belongsTo(User::class, 'kps', 'nip');
    // }

    // public function User1()
    // {
    //     return $this->belongsToMany(User::class, 'Detail_Peran_Dosen', 'id_RPS', 'nip');
    // }

    public function Minggu_RPS()
    {
        return $this->belongsToMany(Minggu_RPS::class, 'Detail_RPS', 'id_RPS', 'kodeMingguRPS');
    }

    public function Nilai_Mahasiswa()
    {
        return $this->hasMany(Nilai_Mahasiswa::class,'id_RPS', 'id_RPS');
    }

    public function Teknik_Penilaian()
    {
        return $this->belongsToMany(Teknik_Penilaian::class, 'Detail_RPS', 'id_RPS', 'kodePenilaian');
    }

    public function User(){
        return $this->belongsTo(User::class, 'nip','nip');
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'kodeKelas','kodeKelas');
    }


}
