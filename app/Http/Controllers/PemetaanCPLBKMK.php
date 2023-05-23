<?php

namespace App\Http\Controllers;

use App\Exports\ExportPemetaanCPLBKMK;
use Illuminate\Http\Request;
use App\Models\Mata_Kuliah;
use App\Models\Detail_BK_MK;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Bahan_Kajian;
use App\Models\CPL_Prodi;
use Illuminate\Support\Facades\DB;
use Dompdf\dompdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;


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

    public function exportExcel(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date_time = date('Y_m_d_H_i_s');
        $filename = "Pemetaan BK dan MK_" . $date_time . '.xlsx';
        return Excel::download(new ExportPemetaanCPLBKMK(CPL_Prodi::all(),Bahan_Kajian::all(),Mata_Kuliah::all(),Detail_BK_MK::all(),Detail_CPLProdi_BK::all()), $filename);
    }

    public function exportPdf(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.pemetaan_cpl_bk_mk.tableToEkspor', [
            'title' => 'Pemetaan CPL BK MK',
            'cpl_list' => CPL_Prodi::all(),
            'bk_list' => Bahan_Kajian::all(),
            'mk_list' => Mata_Kuliah::all(),
            'pemetaan1' => Detail_BK_MK::all(),
            'pemetaan2' => Detail_CPLProdi_BK::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Pemetaan CPL BK dan Mk_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        }

}