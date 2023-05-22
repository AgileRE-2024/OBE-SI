<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CplProdi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = 'cplprodi';

    public function pemetaanCplDiktiCplProdi(){
        return $this->hasMany(PemetaanCplDiktiCplProdi::class);
    }
}
