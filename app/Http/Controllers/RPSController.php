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
use Illuminate\Validation\Rule;

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
    public function show($kodeRPS)
    {
        return view('content.rps', [
            'title' => 'RPS',
            'kodeRPS'=>$kodeRPS,
            'rps_list'=> RPS::all(),
            'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
            'dosen_list'=> User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'detail_peran_dosen_list' => Detail_Peran_Dosen::all()->where('kodeRPS', $kodeRPS),
            'subcpmk_list'=>SubCPMK::all(),
            'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        ]);
    }
    public function export($type, $kodeRPS)
    {
        date_default_timezone_set('Asia/Jakarta');

        $view = view('content.tableToRPSEkspor', [
            'title' => 'RPS',
            'rps_list'=> RPS::all(),
            'kodeRPS' => $kodeRPS,
            'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            'detail_rps_list'=> Detail_RPS::all(),
            'dosen_list'=> User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'detail_peran_dosen_list' => Detail_Peran_Dosen::all()->where('kodeRPS',$kodeRPS),
            'subcpmk_list'=>SubCPMK::all(),
            'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        ]);

        $date_time = date('Y_m_d_H_i_s');

        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

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
        $kodeRPS=session('kodeRPS');
        return view('content.create_rps', [
            'title'=>'Buat RPS',
            'mk_list'=>Mata_Kuliah::all(),
            'dosen_list'=>User::all(),
            'kodeRPS'=>$kodeRPS,
        ]);
    }

    
    //NEW FUNCTION 1
    public function store(Request $request)
    {
        // Validasi Input
        $request->validate([

            'kodeMK' => 'required',
            'kps' => 'required',
            'tahunAjaran' => 'required',
            'pustaka'=>'required',
            'semester' => 'required',
            'penanggungJawab' => 'required',
            'dosenPengampu' => 'required',
            'detail_penilaian' => 'required'
        ]);
        // Menggabungkan kodeMK, semester, dan tahun menjadi kodeRPS
        $kodeRPS = $request->kodeMK . $request->semester . $request->tahunAjaran;
        // Check apakah kodeRPS sudah ada
        $rps = RPS::where('kodeRPS', $kodeRPS)->first();
        if ($rps) {
            return redirect()->back()->withErrors(['kodeRPS' => 'Kode RPS sudah digunakan untuk kodeMK dan tahun ajaran yang sama.'])->withInput();
        }
        // Menyimpan RPS baru 
        RPS::create([ 
            'tahunAjaran' => $request->tahunAjaran, 
            'kodeMK' => $request->kodeMK, 
            'kodeRPS' => $kodeRPS, 
            'semester' => $request->semester, 
            'created_at' => $request->created_at, 
            'diperiksa_oleh' => $request->diperiksa_oleh, 
            'disiapkan_oleh' => $request->disiapkan_oleh, 
            'disetujui_oleh' => $request->disetujui_oleh, 
            'dibuat_oleh' => $request->dibuat_oleh, 
            'versi' => $request->versi, 
            'penanggungJawab' => $request->penanggungJawab, 
            'dosenPengampu' => $request->dosenPengampu, 
            'updated_at' => $request->updated_at, 
            'detail_penilaian' => $request->detail_penilaian, 
        ]);
    
        return redirect()->route('edit_rps.teknik_penilaian', ['kodeRPS' => $kodeRPS ])->with(['success' => 'Data RPS berhasil ditambahkan.', 'kodeRPS'=>$request->kodeRPS]);
    }
    
    //NEW FUNCTION 2
    public function filterNewestYearSemester(){

        $newestYear = RPS::max('tahunAjaran');
        $newestSemester = RPS::where('tahunAjaran',$newestYear)->max('semester');
        $rps = RPS::where('tahunAjaran',$newestYear)->where('semester',$newestSemester)->get();

        return view('content.cari_rps', [
            'title' => 'RPS',
            'rps' => $rps,
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

    
}
