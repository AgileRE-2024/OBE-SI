<?php

namespace App\Http\Controllers;

use App\Exports\CPLDiktiExport;
use Dompdf\Dompdf;
use App\Models\CPL_SN_Dikti;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class CPLDiktiController extends Controller
{
    public function index()
    {
        $cpls = CPL_SN_Dikti::all();
        return view('content.cpl_dikti.cpl_dikti', ['title' => 'CPL Dikti', 'cpls' => $cpls]);
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.cpl_dikti.tableToEkspor', [
            'title' => 'Tabel Capaian Pembelajaran SN Dikti',
            'cpls' => CPL_SN_Dikti::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Tabel CPL SN Dikti_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Tabel CPL SN Dikti_" . $date_time . '.xlsx';
            return Excel::download(new CPLDiktiExport(), $filename);
        }
    }

    public function addCPLDikti()
    {
        return view('content.cpl_dikti.add_cpl_dikti', ['title' => 'Tambah Profil Lulusan']);
    }

    public function storeCPLDikti(Request $request)
    {
        $request->validate([
            'kodeCPLSN' => 'required|unique:cpl_sn_dikti, kodeCPLSN',
            'deskripsiSN' => 'required',
            'sumberSN' => 'required',
            'kategoriSN' => 'required',
            'jenisSN' => 'required',
        ]);

        CPL_SN_Dikti::create([
            'kodeCPLSN' => $request->kodeCPLSN,
            'deskripsiSN' => $request->deskripsiSN,
            'sumberSN' => $request->sumberSN,
            'kategoriSN' => (int)$request->kategoriSN,
            'jenisSN' => $request->jenisSN,
        ]);

        return redirect()->route('kurikulum.data.cpl_dikti')->with('success', 'CPL SN Dikti berhasil ditambahkan');
    }

    public function edit($cpl)
    {
        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();

        return view('content.cpl_dikti.edit_cpl_dikti', ['title' => 'Edit CPL SN Dikti', 'cpl' => $cpl]);
    }

    public function update($cpl, Request $request)
    {
        $request->validate([
            'kodeCPLSN' => 'required',
            'deskripsiSN' => 'required',
            'sumberSN' => 'required',
            'kategoriSN' => 'required',
            'jenisSN' => 'required',
        ]);

        if (CPL_SN_Dikti::where('kodeCPLSN', $request->kodeCPLSN)->exists() && $request->kodeCPLSN != $cpl) {
            return redirect()->back()->with('error', 'Kode CPL sudah ada');
        }

        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();
        $cpl->update([
            'kodeCPLSN' => $request->kodeCPLSN,
            'deskripsiSN' => $request->deskripsiSN,
            'sumberSN' => $request->sumberSN,
            'kategoriSN' => (int)$request->kategoriSN,
            'jenisSN' => $request->jenisSN,
        ]);
        $cpl->save();

        return redirect()->route('kurikulum.data.cpl_sndikti')->with('success', 'CPL SN Dikti berhasil diubah');
    }

    public function delete($cpl)
    {
        $cpl = CPL_SN_Dikti::where('kodeCPLSN', $cpl)->first();
        $cpl->delete();

        return redirect()->route('kurikulum.data.cpl_sndikti')->with('success', 'CPL SN Dikti berhasil dihapus');
    }
}
