<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemetaanBKMK extends Model
{
    use HasFactory;
    protected $table = 'detail_bk_mk';
    public $timestamps = false;
    protected $fillable = [
        'kodemk',"kode_bk"
    ];
}
