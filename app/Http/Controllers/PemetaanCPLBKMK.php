<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mata_Kuliah;
use App\Models\Detail_BK_MK;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Bahan_Kajian;
use App\Models\CPL_Prodi;

use Illuminate\Support\Facades\DB;


class PemetaanCPLBKMK extends Controller
{
    //
    public function index()
    {
        $pemetaan1 = Detail_BK_MK::all();
        $pemetaan2 = Detail_CPLProdi_BK::all();
        $mk_list = Mata_Kuliah::all();
        $bk_list = Bahan_Kajian::all();
        $cpl_list = CPL_Prodi::all();
        return view('content.pemetaan_cpl_bk_mk.matriksCPL_BK_MK', [
            'title' => 'Pemetaan CPL BK MK',
            'cpl_list' => CPL_Prodi::all(),
            'bk_list' => Bahan_Kajian::all(),
            'mk_list' => Mata_Kuliah::all(),
            'pemetaan1' => Detail_BK_MK::all(),
            'pemetaan2' => Detail_CPLProdi_BK::all(),
        ]);
    }

}
