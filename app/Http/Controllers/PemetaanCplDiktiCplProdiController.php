<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpl_SN_Dikti;
use App\Models\Cpl_Prodi;
use App\Models\Detail_SN_CPLProdi;
use Dompdf\Dompdf;
use App\Exports\CplDiktiCplProdiExport as ExportCPLDiktiCPLProdi;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class PemetaanCplDiktiCplProdiController extends Controller
{
    public function index()
    {


        // Return views
        return view('content.pemetaan_sn_cplprodi.data', [
            'title' => 'Pemetaan CPLSNDikti CPL Prodi',
            'cpldikti_list' => Cpl_SN_Dikti::all(),
            'cplprodi_list' => Cpl_Prodi::all(),
            'pemetaan' => Detail_SN_CPLDikti::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    public function update(Request $request)
    {
        foreach (Detail_SN_CPLDikti::all() as $key => $pemetaan) {
            if (!collect($request)->contains($pemetaan->kode_cpldikti . '&' . $pemetaan->kode_cplprodi)) {
                $pemetaan->delete();
            } 
        }
        foreach ($request->request as $key => $param) {
            if (strstr($param, '&')) {
                $foreignList = explode('&', $param);
                if (Detail_SN_CPLDikti::all()->where('kode_cpldikti', $foreignList[0])->where('kode_cplprodi', '===', $foreignList[1])->count() == 0) {
                    Detail_SN_CPLDikti::create([
                        'kode_cpldikti' => $foreignList[0],
                        'kode_cplprodi' => $foreignList[1],
                    ]);
                }
            }
        }
        return redirect(route('kurikulum.pemetaan.admin.matriks'))->with('success','Berhasil menyimpan perubahan!!');
    }
    public function table()
    {
        // Return views
        return view('content.pemetaan_sn_cplprodi.tableMatriksCPLDiktiCPLProdi', [
            'title' => 'Pemetaan CPLDikti CPLProdi',
            'cpldikti_list' => Cpl_SN_Dikti::all(),
            'cplprodi_list' => Cpl_Prodi::all(),
            'pemetaan' => Detail_SN_CPLDikti::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');
        $view = view('Matriks.Export', [
            'title' => 'Pemetaan CPLDikti CPLProdi',
            'cpldikti_list' => Cpl_SN_Dikti::all(),
            'cplprodi_list' => Cpl_Prodi::all(),
            'pemetaan' => Detail_SN_CPLDikti::all(),
        ]);
        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf'){
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();
            $filename = "Pemetaan CPLDikti dan CPLProdi_" . $date_time . ".pdf";
            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Pemetaan CPLDikti dan CPLProdi_" . $date_time . ".xlsx";
            return Excel::download(new ExportCPLDiktiCPLProdi(Cpl_SN_Dikti::all(), Cpl_Prodi::all(), Detail_SN_CPLDikti::all()),$filename);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PemetaanPlCpl  $pemetaanPlCpl
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_SN_CPLProdi $Detail_SN_CPLProdi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemetaanPlCpl  $pemetaanPlCpl
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_SN_CPLProdi $Detail_SN_CPLProdi)
    {
        return view('Matriks.edit', [
            'cpldikti_list' => Cpl_SN_Dikti::all(),
            'cplprodi_list' => Cpl_Prodi::all(),
            'pemetaan' => Detail_SN_CPLDikti::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemetaanPlCpl  $pemetaanPlCpl
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemetaanPlCpl $pemetaanPlCpl)
    {
        //
    }
}
