<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'id_media';
    public $incrementing = false;
    protected $table = 'media';
    protected $fillable = [
        'id_media', 'nama_media','deskripsi_media'
    ];
    public function mingguRPS(){
        return $this->belongsToMany(Metode::class, 'detail_metode_mingguRPS', 'id_media', 'kodeMingguRPS');
    }

    use HasFactory;
}
