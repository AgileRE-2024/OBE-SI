<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengampu extends Model
{
    protected $table = "pengampu";
    protected $fillable = ["id_pengampu", "id_rps", "kodeMK", "nip"];
    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo(User::class, "nip");
    }
}
