<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPL_Prodi;
use App\Models\Bahan_Kajian;
use App\Models\Detail_CPLProdi_BK;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PemetaanCPLBKExport;

class CPLBKController extends Controller
{
    // bk ganti cpl
    // mk ganti bk
    public function index()
    {
        $pemetaan = Detail_CPLProdi_BK::all();
        $bk_list = Bahan_Kajian::all();
        $cpl_list = CPL_Prodi::all();
        $array = [];
        $array_cpl = [];
        foreach ($bk_list as $key => $bk) {
            if ($pemetaan->where("kodeBK", "===", $bk->kodeBK)->count() == 0) {
                $array[] = $bk->kodeBK;
            }
        }
        foreach ($cpl_list as $key => $cpl) {
            if (
                $pemetaan->where("kodeCPL", "===", $cpl->kodeCPL)->count() == 0
            ) {
                $array_cpl[] = $cpl->kodeCPL;
            }
        }
        // dd($pemetaan->where('kodemk', '===', "AGB101")->count()) ;
        // Return views
        return view("content.pemetaan_cpl_bk.matriksCPL_BK", [
            "title" => "Pemetaan CPL BK",
            "cpl_list" => CPL_Prodi::all(),
            "bk_list" => Bahan_Kajian::all(),
            "pemetaan" => Detail_CPLProdi_BK::all(),
            "empty" => $array,
            "empty_cpl" => $array_cpl,
        ]);
    }
    // bk ganti cpl
    // mk ganti bk
    public function update(Request $request)
    {
        // Drop pemetaan jika gaada di request
        foreach (Detail_CPLProdi_BK::all() as $key => $pemetaan) {
            if (
                !collect($request)->contains(
                    $pemetaan->kodeBK . "&" . $pemetaan->kodeCPL
                )
            ) {
                // dd($pemetaan);
                // $pemetaan->delete();
                DB::delete(
                    "DELETE FROM detail_cplprodi_bk WHERE kodeBK = ? AND kodeCPL = ?",
                    [$pemetaan->kodeBK, $pemetaan->kodeCPL]
                );
            }
        }
        // dd($request->request);

        // Add pemetaan baru
        foreach ($request->request as $key => $param) {
            if (strstr($param, "&")) {
                $foreignList = explode("&", $param);
                if (
                    Detail_CPLProdi_BK::all()
                        ->where("kodeBK", $foreignList[0])
                        ->where("kodeCPL", "===", $foreignList[1])
                        ->count() == 0
                ) {
                    Detail_CPLProdi_BK::create([
                        "kodeBK" => $foreignList[0],
                        "kodeCPL" => $foreignList[1],
                    ]);
                }
            }
        }

        return redirect(url("/dashboard/kurikulum/pemetaan/cpl-bk/"));
    }

    public function cetakLaporanPDF(
        Request $request,
        Repository $config,
        Filesystem $files,
        Factory $view
    ) {
        $list_cpl = CPL_Prodi::all();
        $list_bk = Bahan_Kajian::all();
        $detail_cpl_bk = Detail_CPLProdi_BK::all();

        $data = [
            "judul" => "Laporan Pemetaan CPL dan MK",
            "list_cpl" => $list_cpl,
            "list_bk" => $list_bk,
            "detail_cpl_bk" => $detail_cpl_bk,
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

        $pdf->loadView("content.pemetaan_cpl_bk.exportpdf_cplbk", $data);

        if ($request->input("download")) {
            return $pdf->download("Laporan Pemetaan CPLBK.pdf");
        } else {
            return $pdf->stream();
        }
    }

    public function cetakLaporanExcel()
    {
        $judul =
            "Pemetaan Capaian Pembelajaran Lulusan (CPL) & Bahan Kadjian (BK)";
        $list_cpl = CPL_Prodi::all();
        $list_bk = Bahan_Kajian::all();
        $detail_cpl_bk = Detail_CPLProdi_BK::all();

        return Excel::download(
            new PemetaanCPLBKExport($list_bk, $list_cpl, $detail_cpl_bk),
            "Laporan Pemetaan CPLBK.xlsx"
        );
    }

    public function viewExcel()
    {
        $judul =
            "Pemetaan Capaian Pembelajaran Lulusan (CPL) & Bahan Kadjian (BK)";
        $list_cpl = CPL_Prodi::all();
        $list_bk = Bahan_Kajian::all();
        $detail_cpl_bk = Detail_CPLProdi_BK::all();

        return view(
            "content.pemetaan_cpl_mk.exportpdf_cplmk",
            compact("judul", "list_cpl", "list_bk", "detail_cpl_bk")
        );
    }
}
