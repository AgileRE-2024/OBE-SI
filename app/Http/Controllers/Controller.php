<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $msg = [
        "required" => "Bagian ini wajib diisi",
        "file" => "harap upload file untuk :attribute",
        "min" => "minimal :min karakter",
        "mimes" => "file harus bertipe png, jpg, jpeg",
        "email" => "kolom :attribute harus berupa email",
        "confirmed" => ":attribute tidak terkonfirmasi",
        "unique" => "Bagian ini harus unik / Bagian ini telah terdaftar",
        "integer" => ":attribute harus berupa angka",
        "max" => ":attribute maksimal :max karakter",
    ];
}
