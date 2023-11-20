<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $primaryKey = 'namaProdi';
    public $incrementing = false;
    protected $table = 'Prodi';
    protected $fillable = [
        'namaProdi', 'fakultas','namaPT', 'akreditasi', 'jenjangPendidikan','gelarLulusan','visi', 'misi','tujuan'
    ];

    public function Mata_Kuliah(){
        return $this->hasMany(Mata_Kuliah::class,'namaProdi', 'namaProdi');
    }

    public function User(){
        return $this->hasMany(User::class,'namaProdi', 'namaProdi');
    }
}
