<?php

namespace App\Http\Controllers;

use App\Models\Profil_Lulusan;
use App\Models\CPL_Prodi;
use App\Exports\PemetaanCPLPLExport as ExportPemetaanCPLPL;
use App\Models\Detail_PL_CPLProdi;
use Dompdf\Dompdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PemetaanPlCplController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return views
        return view('content.pemetaan_cpl_pl.matriksCPL_PL', [
            'title' => 'Pemetaan CPL PL',
            'pl_list' => Profil_Lulusan::all(),
            'cpl_list' => CPL_Prodi::all(),
            'pemetaan' => Detail_PL_CPLProdi::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Drop pemetaan jika gaada di request
        foreach (Detail_PL_CPLProdi::all() as $key => $pemetaan) {
            if (!collect($request)->contains($pemetaan->kodeCPL . '&' . $pemetaan->kodePL)) {
               // $pemetaan->delete();
                DB::delete('DELETE FROM detail_pl_cplprodi WHERE kodeCPL = ? AND kodePL = ?', [$pemetaan->kodeCPL, $pemetaan->kodePL]);
            }
        }

        // Add pemetaan baru
        foreach ($request->request as $key => $param) {
            if (strstr($param, '&')) {
                $foreignList = explode('&', $param);
                if (Detail_PL_CPLProdi::all()->where('kodeCPL', $foreignList[0])->where('kodePL', '===', $foreignList[1])->count() == 0) {
                    Detail_PL_CPLProdi::create([
                        'kodeCPL' => $foreignList[0],
                        'kodePL' => $foreignList[1],
                    ]);
                }
            }
        }

        return redirect(route('kurikulum.pemetaan.cpl_pl'))->with('success', 'Berhasil menyimpan perubahan!!');
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.pemetaan_cpl_pl.partials.tableToEkspor', [
            'title' => 'Pemetaan CPL PL',
            'pl_list' => Profil_Lulusan::all(),
            'cpl_list' => CPL_Prodi::all(),
            'pemetaan' => Detail_PL_CPLProdi::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Pemetaan CPL dan PL_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Pemetaan CPL dan PL_" . $date_time . '.xlsx';
            return Excel::download(new ExportPemetaanCPLPL(Profil_Lulusan::all(), CPL_Prodi::all(), Detail_PL_CPLProdi::all()), $filename);
        }
    }
}
