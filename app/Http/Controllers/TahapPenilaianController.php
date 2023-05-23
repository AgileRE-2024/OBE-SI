<?php

namespace App\Http\Controllers;

use App\Exports\TahapPenilaianExport;
use App\Models\CPL_Prodi;
use App\Models\Detail_RPS;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class TahapPenilaianController extends Controller
{
    /**
     * display page
     */
    public function index()
    {
        return view('content.tahap_penilaian.tahap_penilaian', [
            'title' => 'Tahap Penilaian',
            'list_cpl' => CPL_Prodi::all(),
            'list_detail_rps' => Detail_RPS::all(),
        ]);
    }

    /**
     * export to PDF or Excel
     */
    public function exportFile($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $date_time = date('Y_m_d_H_i_s');

        if ($type == 'pdf')
        {
            $view = view('content.tahap_penilaian.exportPDF_tahap_penilaian', [
                'list_cpl' => CPL_Prodi::all(),
                'list_detail_rps' => Detail_RPS::all(),
            ]);

            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4','landscape');
            $dompdf->render();

            return Response::make($dompdf->output(),200,[
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . 'Mekanisme dan Tahap Penilaian_' . $date_time . '.pdf'
            ]);
        } else {
            return Excel::download(new TahapPenilaianExport(), 'Mekanisme dan Tahap Penilaian_' . $date_time . '.xlsx');
        }
    }
}
