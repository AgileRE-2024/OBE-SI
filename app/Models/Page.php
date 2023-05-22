<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $primaryKey = 'pemetaan';
    public $incrementing = false;
    protected $table = 'Page';
    protected $fillable = [
        'pemetaan', 'deskripsi'
    ];
}
