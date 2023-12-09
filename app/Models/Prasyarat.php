<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prasyarat extends Model
{
    protected $table = 'Prasyarat';
    protected $fillable = ['id_mat_kodeMK', 'kodeMK', 'mat_kodeMK'];
    public $timestamps = false;

    public function MataKuliah()
    {
        return $this->belongsTo(Mata_Kuliah::class, 'kodeMK');
    }
}
