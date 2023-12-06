<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengampu extends Model
{
    protected $table = 'Pengampu';
    protected $fillable = ['id_rps', 'kodeMK', 'nip'];
    public $timestamps = false;
}
