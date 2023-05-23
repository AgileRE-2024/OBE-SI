<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_Peran_Dosen;
use App\Models\Detail_RPS;
use App\Models\Mata_Kuliah;
use App\Models\Minggu_RPS;
use App\Models\RPS;
use App\Models\SubCPMK;
use App\Models\Teknik_Penilaian;
use App\Models\User;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class RPSController extends Controller
{
    public function index()
    {
        return view('content.cari_rps', [
            'title' => 'RPS',
            'rps_list'=> RPS::all(),
            'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
            'dosen_list'=> User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
            'subcpmk_list'=>SubCPMK::all(),
            'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        ]);
    }
    public function export($type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.tableToRPSEkspor', [
            'title' => 'RPS',
            'rps_list'=> RPS::all(),
            'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
            'dosen_list'=> User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
            'subcpmk_list'=>SubCPMK::all(),
            'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'portrait');

            $dompdf->render();

            $filename = "RPS_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . $filename
            ]);
        } else {
            // $filename = "RPS_" . $date_time . '.xlsx';
            // return Excel::download(new ExportPemetaanMKCpmkSubcpmk(
            //     Detail_MK_CPMK::all(), Mata_Kuliah::all(), SubCPMK::all(),CPMK::all()), $filename);
        }
    }
    public function processData(Request $request)
    {
        $kodeMK = $request->input('kodeMK');
        $tahunAjaran = $request->input('tahunAjaran');

        $rps = RPS::where('kodeMK', $kodeMK)->where('tahunAjaran', $tahunAjaran)->first();

        if ($rps) {
            $message = 'Data ditemukan';
            return view('content.cari_rps', [
                'title' => 'RPS',
                'rps_list'=> RPS::all(),
                'teknik_penilaian_list'=> Teknik_Penilaian::all(),
                'detail_rps_list'=> Detail_RPS::all(),
                'dosen_list'=> User::all(),
                'mk_list' => Mata_Kuliah::all(),
                'minggu_rps_list' => Minggu_RPS::all(),
                'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
                'subcpmk_list'=>SubCPMK::all(),
                'teknik_penilaian_list'=>Teknik_Penilaian::all(),
                'kodeRPS'=>$rps->kodeRPS,
            ])->with('message', $message)->with('kodeRPS', $rps->kodeRPS)->with('tahunAjaran', $rps->tahunAjaran);
        } else {
            $message = 'Data tidak ditemukan, Silakan buat RPS';
            return view('content.cari_rps', [
                'title' => 'RPS',
                'rps_list'=> RPS::all(),
                'teknik_penilaian_list'=> Teknik_Penilaian::all(),
                'detail_rps_list'=> Detail_RPS::all(),
                'dosen_list'=> User::all(),
                'mk_list' => Mata_Kuliah::all(),
                'minggu_rps_list' => Minggu_RPS::all(),
                'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
                'subcpmk_list'=>SubCPMK::all(),
                'teknik_penilaian_list'=>Teknik_Penilaian::all(),
            ])->with('message', $message);
        }
    }
    public function create()
    {
        return view('content.create_rps', [
            'title'=>'Buat RPS',
            'mk_list'=>Mata_Kuliah::all(),
            'dosen_list'=>User::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeRPS' => 'required|unique:rps,kodeRPS',
            'kodeMK' => 'required',
            'kps' => 'required',
            'required|different:tahunAjaran,' . $request->kodeMataKuliah,
            ]);

        RPS::create([
            'kodeRPS' => $request->kodeRPS,
            'kodeMK' => $request->kodeMK,
            'kps' => $request->kps,
            'tahunAjaran' => $request->tahunAjaran,
        ]);

        return redirect()->route('rps_create')->with('success', 'Data RPS berhasil ditambahkan.');
    }
}
