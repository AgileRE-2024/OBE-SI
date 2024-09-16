<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PemetaanCPLMKExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CPLMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("content.pemetaan_cpl_mk.matriksCPL_MK", [
            "title" => "Pemetaan CPL-MK",
            "list_cpl" => CPL_Prodi::all(),
            "list_mk" => Mata_Kuliah::all(),
            "detail_mk_cpmk" => Detail_MK_CPMK::all(),
            "list_cpmk" => CPMK::all(),
        ]);
    }
    public function cetakLaporanPDF(
        Request $request,
        Repository $config,
        Filesystem $files,
        Factory $view
    ) {
        $list_cpl = CPL_Prodi::all();
        $list_mk = Mata_Kuliah::all();
        $detail_mk_cpmk = Detail_MK_CPMK::all();
        $list_cpmk = CPMK::all();

        $data = [
            "judul" => "Laporan Pemetaan CPL dan MK",
            "list_cpl" => $list_cpl,
            "list_mk" => $list_mk,
            "detail_mk_cpmk" => $detail_mk_cpmk,
            "list_cpmk" => $list_cpmk,
        ];

        $dompdf = new Dompdf();

        $pdf = new PDF(
            $dompdf,
            $config,
            $files,
            $view,
            "utf-8",
            "A4",
            "portrait"
        );

        $pdf->loadView("content.pemetaan_cpl_mk.exportpdf_cplmk", $data);

        if ($request->input("download")) {
            return $pdf->download("Laporan Pemetaan CPLMK.pdf");
        } else {
            return $pdf->stream();
        }
    }

    public function cetakLaporanExcel()
    {
        $judul =
            "Pemetaan Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)";
        $list_cpl = CPL_Prodi::all();
        $list_mk = Mata_Kuliah::all();
        $detail_mk_cpmk = Detail_MK_CPMK::all();
        $list_cpmk = CPMK::all();

        return Excel::download(
            new PemetaanCPLMKExport(
                $judul,
                $list_cpl,
                $list_mk,
                $detail_mk_cpmk,
                $list_cpmk
            ),
            "Laporan Pemetaan CPLMK.xlsx"
        );
    }

    public function viewExcel()
    {
        $judul =
            "Pemetaan Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)";
        $list_cpl = CPL_Prodi::all();
        $list_mk = Mata_Kuliah::all();
        $detail_mk_cpmk = Detail_MK_CPMK::all();
        $list_cpmk = CPMK::all();

        return view(
            "content.pemetaan_cpl_mk.exportpdf_cplmk",
            compact(
                "judul",
                "list_cpl",
                "list_mk",
                "detail_mk_cpmk",
                "list_cpmk"
            )
        );
    }

    // public function exportcplmk($type)
    // {
    //     date_default_timezone_set('Asia/Jakarta');

    //     $view = view('content.pemetaan_cpl_mk.exportpdf_cplmk', [
    //         'judul' => 'Pemetaan CPL MK',
    //         'list_cpl' => CPL_Prodi::all(),
    //         'list_mk' => Mata_Kuliah::all(),
    //         'detail_mk_cpmk' => Detail_MK_CPMK::all(),
    //         'list_cpmk' => CPMK::all(),
    //     ]);

    //     $date_time = date('Y_m_d_H_i_s');

    //     if ($type === 'pdf') {
    //         $dompdf = new Dompdf();
    //         $dompdf->loadHtml($view);
    //         $dompdf->setPaper('A4', 'landscape');

    //         $dompdf->render();

    //         $filename = "Pemetaan CPL dan MK_" . $date_time . ".pdf";

    //         return Response::make($dompdf->output(), 200, [
    //             'Content-Type' => 'application/pdf',
    //             'Content-Disposition' => 'inline; filename=' . $filename
    //         ]);
    //     } else {
    //         $filename = "Pemetaan CPL dan MK_" . $date_time . '.xlsx';
    //         return Excel::download(new PemetaanCPLMKExport(CPL_Prodi::all(), Mata_Kuliah::all(), Detail_MK_CPMK::all(), CPMK::all()), $filename);
    //     }
    // }
}
