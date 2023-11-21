<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prasyarat extends Model
{
    protected $table = 'Prasyarat';
    protected $fillable = ['kodeMK', 'mat_kodeMK'];
}
