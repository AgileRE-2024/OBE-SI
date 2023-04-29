<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_RPS extends Model
{
    protected $table = 'Detail_RPS';
    protected $fillable = ['kodeRPS', 'kodeMingguRPS'];

    public function Teknik_Penilaian()
    {
        return $this->belongsTo(Teknik_Penilaian::class,'kodePenilaian', 'kodePenilaian');
    }
}
