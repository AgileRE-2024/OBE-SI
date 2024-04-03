<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\CPMK;
use App\Models\SubCPMK;
use Illuminate\Http\Request;
use App\Exports\SubCPMKExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class SubCPMKController extends Controller
{
    public function index()
    {
        $subcpmks = SubCPMK::all();
        return view('content.sub_cpmk.sub_cpmk', ['title' => 'Sub CPMK', 'subcpmks' => $subcpmks]);
    }

    public function addSubCPMK()
    {
        $cpmks = CPMK::all();

        return view('content.sub_cpmk.add_sub_cpmk', ['title' => 'Tambah Sub CPMK', 'cpmks' => $cpmks]);
    }

    public function storeSubCPMK(Request $request)
    {
        $request->validate([
            'kodeSubCPMK' => 'required|unique:subcpmk,kodeSubCPMK',
            'deskripsiSubCPMK' => 'required',
            'kodeCPMK' => 'required',
            'kriteriaPenilaian' => 'required',
            'indikatorPenilaian' => 'required',
        ]);

        SubCPMK::create([
            'kodeSubCPMK' => $request->kodeSubCPMK,
            'deskripsiSubCPMK' => $request->deskripsiSubCPMK,
            'kodeCPMK' => $request->kodeCPMK,
            'kriteriaPenilaian' => $request->kriteriaPenilaian,
            'indikatorPenilaian' => $request->indikatorPenilaian,
        ]);

        return redirect()->route('kurikulum.data.sub_cpmk')->with('success', 'Sub CPMK berhasil ditambahkan!');
    }

    public function editSubCPMK($subcpmk)
    {
        $cpmks = CPMK::all();
        $subcpmk = SubCPMK::find($subcpmk);

        return view('content.sub_cpmk.edit_sub_cpmk', ['title' => 'Edit Sub CPMK', 'cpmks' => $cpmks, 'subcpmk' => $subcpmk]);
    }

    public function updateSubCPMK(Request $request, $subcpmk)
    {
        $request->validate([
            'kodeSubCPMK' => 'required',
            'deskripsiSubCPMK' => 'required',
            'kodeCPMK' => 'required',
            'kriteriaPenilaian' => 'required',
            'indikatorPenilaian' => 'required',
        ]);

        if ($request->kodeSubCPMK != $subcpmk) {
            $request->validate([
                'kodeSubCPMK' => 'unique:subcpmk,kodeSubCPMK'
            ]);
        }

        SubCPMK::where('kodeSubCPMK', $subcpmk)->update([
            'kodeSubCPMK' => $request->kodeSubCPMK,
            'deskripsiSubCPMK' => $request->deskripsiSubCPMK,
            'kodeCPMK' => $request->kodeCPMK,
            'kriteriaPenilaian' => $request->kriteriaPenilaian,
            'indikatorPenilaian' => $request->indikatorPenilaian,
        ]);

        return redirect()->route('kurikulum.data.sub_cpmk')->with('success', 'Sub CPMK berhasil diubah!');
    }

    public function deleteSubCPMK($subcpmk)
    {
        if (SubCPMK::find($subcpmk)->Minggu_RPS->count() > 0) {
            return redirect()->route('kurikulum.data.sub_cpmk')->with('error', 'Sub CPMK tidak dapat dihapus karena masih digunakan!');
        } else {
            $subcpmk = SubCPMK::where('kodeSubCPMK', $subcpmk)->first();
            $subcpmk->delete();
            return redirect()->route('kurikulum.data.sub_cpmk')->with('success', 'Sub CPMK berhasil dihapus!');
        }
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.sub_cpmk.tableToExpor', [
            'title' => 'Tabel Sub CPMK',
            'subcpmks' => SubCPMK::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Tabel Sub CPMK_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            $filename = "Tabel Sub CPMK_" . $date_time . '.xlsx';
            return Excel::download(new SubCPMKExport(), $filename);
        }
    }
}
