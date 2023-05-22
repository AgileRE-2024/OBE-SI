<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;

class CPLMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.pemetaan_cpl_mk.matriksCPL_MK', [
            'title' => 'Punya IIn',
            'list_cpl' => CPL_Prodi::all(),
            'list_mk' => Mata_Kuliah::all(),
            'detail_mk_cpmk' => Detail_MK_CPMK::all(),
            'list_cpmk' => CPMK::all(),
        ]);
    }

}