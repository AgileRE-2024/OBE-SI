<?php

namespace App\Http\Controllers;

use App\Exports\CPLProdiExport;
use Dompdf\Dompdf;
use App\Models\CPL_Prodi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class CPLProdiController extends Controller
{
    public function index()
    {
        $cpls = CPL_Prodi::all();
        return view('content.cpl_prodi.cpl_prodi', ['title' => 'CPL Prodi', 'cpls' => $cpls]);
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.cpl_prodi.tableToEkspor', [
            'title' => 'Tabel Capaian Pembelajaran Program Studi',
            'cpls' => CPL_Prodi::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Tabel CPL Prodi_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Tabel Capaian Pembelajaran Program Studi_" . $date_time . '.xlsx';
            return Excel::download(new CPLProdiExport(), $filename);
        }
    }

    public function edit($cpl)
    {
        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        return view('content.cpl_prodi.edit_cpl_prodi', ['title' => 'CPL Prodi', 'cpl' => $cpl]);
    }

    public function addCPLProdi()
    {
        return view('content.cpl_prodi.add_cpl_prodi', ['title' => 'Tambah CPL Prodi']);
    }

    public function storeCPLProdi(Request $request)
    {
        $request->validate([
            'kodeCPL' => 'required|unique:cpl_prodi, kodeCPL',
            'deskripsiCPL' => 'required',
            'referensiCPL' => 'required',
        ]);

        CPL_Prodi::create([
            'kodeCPL' => $request->kodeCPL,
            'deskripsiCPL' => $request->deskripsiCPL,
            'referensiCPL' => $request->referensiCPL,
        ]);

        return redirect()->route('kurikulum.data.cpl_prodi')->with('success', 'CPL Prodi berhasil ditambahkan');
    }

    public function updateCPLProdi(Request $request, $cpl)
    {
        $request->validate([
            'kodeCPL' => 'required',
            'deskripsiCPL' => 'required',
            'referensiCPL' => 'required',
        ]);

        if (CPL_Prodi::where('kodeCPL', $request->kodeCPL)->exists() && $request->kodeCPL != $cpl) {
            return redirect()->back()->with('error', 'Kode CPL sudah ada');
        }

        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        $cpl->update([
            'kodeCPL' => $request->kodeCPL,
            'deskripsiCPL' => $request->deskripsiCPL,
            'referensiCPL' => $request->referensiCPL,
        ]);
        $cpl->save();

        return redirect()->route('kurikulum.data.cpl_prodi')->with('error', 'CPL Prodi berhasil diubah');
    }

    public function deleteCPLProdi($cpl)
    {
        $cpl = CPL_Prodi::where('kodeCPL', $cpl)->first();
        $cpl->delete();

        return redirect()->route('kurikulum.data.cpl_prodi')->with('success', 'CPL Prodi berhasil dihapus');
    }
}
