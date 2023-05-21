<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\Minggu_RPS;
use App\Models\RPS;
use App\Models\SubCPMK;
use Illuminate\Http\Request;

class RPSController extends Controller
{
    public function index()
    {
        return view('content.rps', [
            'title' => 'RPS',
            'rps_list'=> RPS::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
        ]);
    }
}
