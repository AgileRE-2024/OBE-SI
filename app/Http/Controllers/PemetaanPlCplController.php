<?php

namespace App\Http\Controllers;

use App\Models\ProfilLulusan;
use App\Models\CPLProdi;
use App\Models\PemetaanPlCpl;
use App\Exports\PemetaanCPLPLExport as ExportPemetaanCPLPL;
use Dompdf\Dompdf;
use Maatwebsite\Excel\Facades\Excel;
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
        ]);
    }

    /**
     * Display table pemetaan
     */
    public function table()
    {
        // Return views
        return view('content.pemetaan_cpl_pl.partials.tableMatriksCPL_PL', [
            'title' => 'Pemetaan CPL PL',
            'pl_list' => ProfilLulusan::all(),
            'cpl_list' => CPLProdi::all(),
            'pemetaan' => PemetaanPlCpl::all(),
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
        $id = $request->id;
        $foreign_id_list = explode('-', $id);

        if (PemetaanPlCpl::all()->where('kodeCPL', $foreign_id_list[0])->where('kodePL', $foreign_id_list[1])->count() == 0) {
            PemetaanPlCpl::create([
                'kodeCPL' => $foreign_id_list[0],
                'kodePL' => $foreign_id_list[1],
            ]);
        } else {
            PemetaanPlCpl::where('kodeCPL', $foreign_id_list[0])->where('kodePL', $foreign_id_list[1])->delete();
        }
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.pemetaan_cpl_pl.partials.tableToEkspor', [
            'title' => 'Pemetaan CPL PL',
            'pl_list' => ProfilLulusan::all(),
            'cpl_list' => CPLProdi::all(),
            'pemetaan' => PemetaanPlCpl::all(),
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
            return Excel::download(new ExportPemetaanCPLPL(ProfilLulusan::all(), CPLProdi::all(), PemetaanPlCpl::all()), $filename);
        }
    }
}
