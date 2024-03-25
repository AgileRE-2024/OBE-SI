<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $primaryKey = 'namaProdi';
    public $incrementing = false;
    protected $table = 'prodi';
    protected $fillable = [
        'namaProdi', 'fakultas','namaPT', 'akreditasi', 'jenjangPendidikan','gelarLulusan','visi', 'misi','tujuan', 'deleted_at'
    ];

    public function Mata_Kuliah(){
        return $this->hasMany(Mata_Kuliah::class,'namaProdi', 'namaProdi');
    }

    public function User(){
        return $this->hasMany(User::class,'namaProdi', 'namaProdi');
    }
}
