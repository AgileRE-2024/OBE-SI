<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pustaka_Minggurps extends Model
{
    protected $table = "detail_pustaka_minggurps";
    protected $fillable = ["id_pustaka", "kodeMingguRPS", "referensi"];

    public function Pustaka()
    {
        return $this->belongsTo(Pustaka::class, "id_pustaka", "id_pustaka");
    }
}
