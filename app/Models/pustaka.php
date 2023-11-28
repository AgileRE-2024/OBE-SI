<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustaka extends Model
{
    protected $primaryKey = 'id_pustaka';
    public $incrementing = false;
    protected $table = 'pustakas';
    protected $fillable = [
        'id_pustaka', 'nama_penulis','tahun','judul','penerbit','referensi','deleted_at'
    ];
    use HasFactory;

    public function Minggu_RPS()
    {
        return $this->belongsToMany(Minggu_RPS::class, 'detail_pustaka_minggurps', 'id_pustaka', 'kodeMingguRPS');
    }
}
