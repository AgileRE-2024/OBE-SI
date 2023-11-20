<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustaka extends Model
{
    public function Minggu_RPS()
    {
        return $this->belongsToMany(Minggu_RPS::class, 'detail_pustaka_minggurps', 'id_pustaka', 'kodeMingguRPS');
    }
    use HasFactory;
}
