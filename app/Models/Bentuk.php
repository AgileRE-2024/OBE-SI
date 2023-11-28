<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bentuk extends Model
{
    protected $primaryKey = 'id_bentuk';
    public $incrementing = false;
    protected $table = 'bentuks';
    protected $fillable = [
        'id_bentuk', 'nama_bentuk','deskripsi_bentuk'
    ];
    public function mingguRPS(){
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'id_bentuk', 'kodeMingguRPS');
    }

    use HasFactory;
}
