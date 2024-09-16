<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemetaanPlCpl extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function profilLulusan()
    {
        return $this->belongsTo(ProfilLulusan::class, "kodePL", "kodePL");
    }

    public function CapaianPembelajaranLulusan()
    {
        return $this->belongsTo(CPLProdi::class, "kodeCPL", "kodeCPL");
    }
}
