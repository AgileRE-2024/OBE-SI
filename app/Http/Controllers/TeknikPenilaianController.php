<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use App\Models\Teknik_Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class TeknikPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tps = Teknik_Penilaian::all();
        return view('content.teknik_penilaian.teknik_penilaian', ['title' => 'Teknik Penilaian', 'tps' => $tps]);
    }

    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.teknik_penilaian.tableToekspor', [
            'title' => 'Tabel Teknik Penilaian',
            'tps' => Teknik_Penilaian::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "Tabel Teknik Penilaian_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            // $filename = "Pemetaan CPL dan PL_" . $date_time . '.xlsx';
            // return Excel::download(new ExportPemetaanCPLPL(ProfilLulusan::all(), CPLProdi::all(), PemetaanPlCpl::all()), $filename);
        }
    }

    public function editTeknikPenilaian($tp)
    {
        $tp = Teknik_Penilaian::where('kodePenilaian', $tp)->first();
        return view('content.teknik_penilaian.edit_penilaian', ['title' => 'Teknik Penilaian', 'tp' => $tp]);
    }

    public function addTeknikPenilaian()
    {
        return view('content.teknik_penilaian.add_penilaian', ['title' => 'Tambah Teknik Penilaian']);
    }

    public function storeTeknikPenilaian(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodePenilaian' => 'required|unique:teknik_penilaian,kodePenilaian',
            'teknikPenilaian' => 'required',
            'bobotPenilaian' => 'required',
            'kriteriaPenilaian' => 'required',
            'tahapPenilaian' => 'required',
            'instrumenPenilaian' => 'required',
            'kodeRPS' => 'required',

        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Teknik_Penilaian::create([
            'kodePenilaian' => $request->kodePenilaian,
            'teknikPenilaian' => $request->teknikPenilaian,
            'bobotPenilaian' => $request->bobotPenilaian,
            'kriteriaPenilaian' => $request->kriteriaPenilaian,
            'tahapPenilaian' => $request->tahapPenilaian,
            'instrumenPenilaian' => $request->instrumenPenilaian,
            'kodeRPS' => $request->kodeRPS,
        ]);

        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik Penilaian berhasil ditambahkan');
    }

    public function updateTeknikPenilaian(Request $request, $tp)
    {
        $validator = Validator::make($request->all(), [
            'kodePenilaian' => 'required',
            'teknikPenilaian' => 'required',
            'bobotPenilaian' => 'required',
            'kriteriaPenilaian' => 'required',
            'tahapPenilaian' => 'required',
            'instrumenPenilaian' => 'required',
            'kodeRPS' => 'required',
        ]);

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Teknik_Penilaian::where('kodePenilaian', $request->kodePenilaian)->exists() && $request->kodePenilaian != $tp) {
            return redirect()->back()->with('error', 'Teknik Penilaian sudah ada');
        }

        $tp = Teknik_Penilaian::where('kodePenilaian', $tp)->first();
        $tp->update([
            'kodePenilaian' => $request->kodePenilaian,
            'teknikPenilaian' => $request->teknikPenilaian,
            'bobotPenilaian' => $request->bobotPenilaian,
            'kriteriaPenilaian' => $request->kriteriaPenilaian,
            'tahapPenilaian' => $request->tahapPenilaian,
            'instrumenPenilaian' => $request->instrumenPenilaian,
            'kodeRPS' => $request->kodeRPS,
        ]);
        $tp->save();

        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik Penilaian berhasil diupdate');
    }

    public function deleteBahanKajian($tp)
    {
        $tp = Teknik_Penilaian::where('kodePenilaian', $tp)->first();
        $tp->delete();
        return redirect()->route('kurikulum.data.teknik_penilaian')->with('success', 'Teknik Penilaian berhasil dihapus');
    }
}