<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\Detail_RPS;
use App\Models\RPS;
use App\Models\Teknik_Penilaian;
use App\Models\Minggu_RPS;
use App\Models\SubCPMK;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PemetaanCPLMKExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TeknikPenilaianCPMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.teknik_penilaian_cpmk.matriks_tp_cpmk', [
            'title' => 'Teknik Penilaian CPMK',
            'list_cpl' => CPL_Prodi::all(),
            'list_mk' => Mata_Kuliah::all(),
            'detail_mk_cpmk' => Detail_MK_CPMK::all(),
            'list_rps' => RPS::all(),
            'list_teknikpenilaian' => Teknik_Penilaian::all(),
            'list_minggurps' => Minggu_RPS::all(),
            'detail_rps' => Detail_RPS::all(),
            'list_subcpmk' => SubCPMK::all(),
            'list_cpmk' => CPMK::all(),
        ]);
    }
}
