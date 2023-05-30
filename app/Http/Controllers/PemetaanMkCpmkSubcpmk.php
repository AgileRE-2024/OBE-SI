<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\SubCPMK;
use App\Exports\PemetaanMkCpmkSubcpmkExport as ExportPemetaanMKCpmkSubcpmk;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

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
            'cpl_list' => CPL_Prodi::all()->sortBy('kodeCPL'),
        ]);
    }
    
    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'title' => 'Tabel Pemetaan MK-CPMK-SUBCPMK',
            'list' => Detail_MK_CPMK::all(),
            'cpmk_list' => CPMK::all(),
            'subcpmk_list' => SubCPMK::all(),
            'detailmkcpmk_list' => Detail_MK_CPMK::all(),
            'mk_list' => Mata_Kuliah::all(),
        ];

        $view = View::make('content.pemetaan_mk_cpmk_subcpmk.tableToEkspor', $data)->render();

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'portrait');

            $dompdf->render();

            $filename = "Tabel Pemetaan MK-CPMK-SUBCPMK_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Tabel Pemetaan MK-CPMK-SUBCPMK_" . $date_time . '.xlsx';
            return Excel::download(new ExportPemetaanMKCpmkSubcpmk(
                Mata_Kuliah::all(), CPMK::all(), SubCPMK::all(), Detail_MK_CPMK::all()), $filename);
        }
    }
}