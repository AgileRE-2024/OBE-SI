<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $primaryKey = 'namaProdi';
    public $incrementing = false;
    protected $table = 'Prodi';
    protected $fillable = [
        'namaProdi', 'fakultas','namaPT', 'akreditasi', 'jenjangPendidikan','gelarLulusan','visi', 'misi','tujuan', 'deleted_at'
    ];
}
