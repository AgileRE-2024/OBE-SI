<?php

namespace App\Http\Controllers;

use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\SubCPMK;
use Illuminate\Http\Request;

class PemetaanMkCpmkSubcpmk extends Controller
{
    public function index()
    {
        return view('content.pemetaan_mk_cpmk_subcpmk.matriksMK_CPMK_SUBCPMK', [
            'title' => 'Pemetaan MK CPMK SUBCPMK',
            'list' => Detail_MK_CPMK::all(),
            'cpmk_list' => CPMK::all(),
            'subcpmk_list' => SubCPMK::all(),
            'detailmkcpmk_list' => Detail_MK_CPMK::all(),
            'mk_list' => Mata_Kuliah::all(),
        ]);
    }
}
