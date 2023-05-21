<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_Peran_Dosen;
use App\Models\Detail_RPS;
use App\Models\Mata_Kuliah;
use App\Models\Minggu_RPS;
use App\Models\RPS;
use App\Models\SubCPMK;
use App\Models\Teknik_Penilaian;
use App\Models\User;
use Illuminate\Http\Request;

class RPSController extends Controller
{
    public function index()
    {
        return view('content.rps', [
            'title' => 'RPS',
            'rps_list'=> RPS::all(),
            'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
            'dosen_list'=> User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
            'subcpmk_list'=>SubCPMK::all(),
            'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        ]);
    }
}
