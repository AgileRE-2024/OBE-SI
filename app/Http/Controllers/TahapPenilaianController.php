<?php

namespace App\Http\Controllers;

use App\Exports\TahapPenilaianExport;
use App\Models\CPL_Prodi;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_RPS;
use App\Models\Mata_Kuliah;
use App\Models\RPS;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
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
            'title' => 'Mekanisme dan Tahap Penilaian',
            'list_tahun_ajaran' => DB::select('SELECT DISTINCT tahunAjaran FROM RPS ORDER BY tahunAjaran DESC'),
        ]);
    }

    /**
     * display table
     */
    public function table($tahun_ajaran)
    {
        return view('content.tahap_penilaian.partial.tabel_tahap_penilaian', [
            'list_cpl' => CPL_Prodi::all(),
            'detail_mk_cpmk' => Detail_MK_CPMK::all(),
            'list_rps' => RPS::all()->where('tahunAjaran', $tahun_ajaran),
            'list_detail_rps' => Detail_RPS::all(),
            'list_mk' => Mata_Kuliah::all(),
        ]);
    }

    /**
     * export to PDF or Excel
     */
    public function exportFile($tahun_ajaran, $type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $date_time = date('Y_m_d_H_i_s');

        if ($type == 'pdf') {
            $view = view('content.tahap_penilaian.exportPDF_tahap_penilaian', [
                'list_cpl' => CPL_Prodi::all(),
                'detail_mk_cpmk' => Detail_MK_CPMK::all(),
                'list_rps' => RPS::all()->where('tahunAjaran', $tahun_ajaran),
                'list_detail_rps' => Detail_RPS::all(),
                'list_mk' => Mata_Kuliah::all(),
                'tahun_ajaran' => $tahun_ajaran,
            ]);

            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . 'Mekanisme dan Tahap Penilaian Tahun Ajaran ' . $tahun_ajaran . "_" . $date_time . '.pdf'
            ]);
        } else {
            return Excel::download(new TahapPenilaianExport($tahun_ajaran), 'Mekanisme dan Tahap Penilaian Tahun Ajaran ' . $tahun_ajaran . "_" . $date_time . '.xlsx');
        }
    }
}
