<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\Prasyarat;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_Peran_Dosen;
use App\Models\Detail_RPS_Penilaian;
use App\Models\Detail_Pustaka_Minggurps;
use App\Models\Mata_Kuliah;
use App\Models\MataKuliah;
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
use App\Exports\ExportListRps;
use App\Exports\ExportListFilteredRps;
use App\Models\Pengampu;

class RPSController extends Controller
{
    public function getDataMaster()
    {
        $rps = RPS::all();
        return response()->json($rps);
    }

    public function index()
    {
        $newestYear = RPS::max('tahunAjaran');
        $rps = RPS::where('tahunAjaran', $newestYear)->get();
        $mk_list = Mata_Kuliah::all();

        return view('cari_rps', [
            'title' => 'RPS',
            'rps_list' => $rps,
            'mk_list' => $mk_list,
            'newestYear' => $newestYear
        ]);
    }

    public function filter_by_matkul($kodeMK)
    {
        $rps = RPS::where('kodeMK', $kodeMK)->get();
        $mk = Mata_Kuliah::where('kodeMK', $kodeMK)->first();

        return view('riwayat_rps', [
            'title' => 'Riwayat RPS',
            'rps_list' => $rps,
            'mk' => $mk,
        ]);
    }

    public function show($kodeRPS)
    {
        return view('content.rps', [
            'title' => 'RPS',
            'kodeRPS' => $kodeRPS,
            'rps_list' => RPS::all(),
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'dosen_list' => User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'subcpmk_list' => SubCPMK::all(),
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
        ]);
    }
    public function export($type, $idRPS, $kodeMK)
    {
        date_default_timezone_set('Asia/Jakarta');
        $rps = RPS::where('id_rps', $idRPS)->first();
        $kodePrasyaratList = Prasyarat::all()->where('kodeMK', $kodeMK)->pluck('mat_kodeMK')->toArray();
        $prasyarat = Mata_Kuliah::whereIn('kodeMK', $kodePrasyaratList)->distinct()->get();
        $dosen = User::where('nip', $rps->nip)->first();
        $kodePengampu = Pengampu::all()->where('id_rps', $rps->id_rps)->pluck('nip')->toArray();
        $pengampu = User::whereIn('nip', $kodePengampu)->distinct()->get();
        $kodeMingguRpsList = Minggu_RPS::all()->where('id_rps', $idRPS)->pluck('kodeMingguRPS')->toArray();
        $kodeCPMKList = Detail_MK_CPMK::all()->where('kodeMK', $kodeMK)->pluck('kodeCPMK')->toArray();
        $kodeCPLList = CPMK::whereIn('kodeCPMK', $kodeCPMKList)->get()->pluck('kodeCPL')->toArray();
        $list_cpl = CPL_Prodi::whereIn('kodeCPL', $kodeCPLList)->distinct()->get();

        $view = view('content.eksporRPS', [
            'title' => 'RPS',
            'kodeMK' => $kodeMK,
            'mata_kuliah' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
            'title' => 'RPS',
            'rps' => RPS::where('id_rps', $idRPS)->first(),
            'dosen' => $dosen,
            'minggu_rps_list' => Minggu_RPS::where("id_rps", $idRPS)->get(),
            'mk' => Mata_Kuliah::where("kodeMK", $kodeMK)->first(),
            'all_cpmk' => CPMK::all(),
            'mk_cpmk' => Detail_MK_CPMK::where('kodeMK', $kodeMK)->get(),
            'cpl' => CPL_Prodi::all(),
            'kodeRPS' => $idRPS,
            'teknik_penilaian_list' => Teknik_Penilaian::where("id_rps", $idRPS),
            'detail_rps_list' => Detail_RPS_Penilaian::all(),
            'minggu_pustaka' => Detail_Pustaka_Minggurps::whereIn('kodeMingguRPS', $kodeMingguRpsList)->get(),
            'list_prasyarat' => $prasyarat,
            'penanggung_jawab' => User::where('nip', $rps->penanggungJawab)->first(),
            'pemeriksa' => User::where('nip', $rps->diperiksa_oleh)->first(),
            'persetujuan' => User::where('nip', $rps->disetujui_oleh)->first(),
            'dosen_pengampu' => $pengampu,
            'list_cpl' => $list_cpl
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

    public function tampilRPS($idRPS, $kodeMK)
    {
        $rps = RPS::where('id_rps', $idRPS)->first();
        $dosen = User::where('nip', $rps->nip)->first();
        $kodePrasyaratList = Prasyarat::all()->where('kodeMK', $kodeMK)->pluck('mat_kodeMK')->toArray();
        $prasyarat = Mata_Kuliah::whereIn('kodeMK', $kodePrasyaratList)->distinct()->get();
        $kodePengampu = Pengampu::all()->where('id_rps', $rps->id_rps)->pluck('nip')->toArray();
        $pengampu = User::whereIn('nip', $kodePengampu)->distinct()->get();
        $kodeMingguRpsList = Minggu_RPS::all()->where('id_rps', $idRPS)->pluck('kodeMingguRPS')->toArray();
        $kodeCPMKList = Detail_MK_CPMK::all()->where('kodeMK', $kodeMK)->pluck('kodeCPMK')->toArray();
        $kodeCPLList = CPMK::whereIn('kodeCPMK', $kodeCPMKList)->get()->pluck('kodeCPL')->toArray();
        $list_cpl = CPL_Prodi::whereIn('kodeCPL', $kodeCPLList)->distinct()->get();

        return view('tampilRPS', [
            'kodeMK' => $kodeMK,
            'mata_kuliah' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
            'title' => 'RPS',
            'rps' => RPS::where('id_rps', $idRPS)->first(),
            'dosen' => $dosen,
            'minggu_rps_list' => Minggu_RPS::where("id_rps", $idRPS)->get(),
            'mk' => Mata_Kuliah::where("kodeMK", $kodeMK)->first(),
            'all_cpmk' => CPMK::all(),
            'mk_cpmk' => Detail_MK_CPMK::where('kodeMK', $kodeMK)->get(),
            'cpl' => CPL_Prodi::all(),
            'kodeRPS' => $idRPS,
            'teknik_penilaian_list' => Teknik_Penilaian::where("id_rps", $idRPS),
            'detail_rps_list' => Detail_RPS_Penilaian::all(),
            'minggu_pustaka' => Detail_Pustaka_Minggurps::whereIn('kodeMingguRPS', $kodeMingguRpsList)->get(),
            'list_prasyarat' => $prasyarat,
            'penanggung_jawab' => User::where('nip', $rps->penanggungJawab)->first(),
            'pemeriksa' => User::where('nip', $rps->diperiksa_oleh)->first(),
            'persetujuan' => User::where('nip', $rps->disetujui_oleh)->first(),
            'dosen_pengampu' => $pengampu,
            'list_cpl' => $list_cpl
        ]);
    }

    public function exportRiwayatRps($type, $kodeMK)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date_time = date('Y_m_d_H_i_s');
        $date = date('d-m-Y');
        $view =  view('content.eksporRiwayatRps', [
            'title' => 'DAFTAR RIWAYAT RPS',
            'mk' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
            'rps_list' => RPS::where('kodeMK', $kodeMK)->get(),
            'date_time' => $date,
        ]);

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

    public function exportList($type)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date_time = date('Y_m_d_H_i_s');
        $date = date('d-m-Y');
        $view =  view('content.eksporRPSList', [
            'title' => 'DAFTAR RPS',
            'rps_list' => RPS::all(),
            'date_time' => $date,
        ]);


        if ($type === 'pdf') {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');

            $dompdf->render();

            $filename = "DAFTAR_RPS_" . $date_time . ".pdf";

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
                'rps_list' => RPS::all(),
                'teknik_penilaian_list' => Teknik_Penilaian::all(),
                'dosen_list' => User::all(),
                'mk_list' => Mata_Kuliah::all(),
                'minggu_rps_list' => Minggu_RPS::all(),
                'subcpmk_list' => SubCPMK::all(),
                'teknik_penilaian_list' => Teknik_Penilaian::all(),
                'kodeRPS' => $rps->kodeRPS,
            ])->with('message', $message)->with('kodeRPS', $rps->kodeRPS)->with('tahunAjaran', $rps->tahunAjaran);
        } else {
            $message = 'Data tidak ditemukan, Silakan buat RPS';
            return view('content.cari_rps', [
                'title' => 'RPS',
                'rps_list' => RPS::all(),
                'teknik_penilaian_list' => Teknik_Penilaian::all(),
                'dosen_list' => User::all(),
                'mk_list' => Mata_Kuliah::all(),
                'minggu_rps_list' => Minggu_RPS::all(),
                'subcpmk_list' => SubCPMK::all(),
                'teknik_penilaian_list' => Teknik_Penilaian::all(),
            ])->with('message', $message);
        }
    }
    public function create()
    {
        $kodeRPS = session('kodeRPS');
        return view('content.create_rps', [
            'title' => 'Buat RPS',
            'mk_list' => Mata_Kuliah::all(),
        ]);
    }


    //NEW FUNCTION 1
    public function store(Request $request)
    {
        // Validasi Input
        $request->validate([
            'kodeMK' => 'required',
            'tahunAjaran' => 'required',
            'semester' => 'required',
            'nip' => 'required'
        ]);

        // dd($request);
        // Menggabungkan kodeMK, semester, dan tahun menjadi kodeRPS
        $id_rps = $request->kodeMK . substr($request->tahunAjaran, -2) . str_pad($request->semester, 2, '0', STR_PAD_LEFT);
        // Check apakah kodeRPS sudah ada
        $rps = RPS::where('id_rps', $id_rps)->first();
        if ($rps) {
            return redirect()->back()->withErrors(['kodeRPS' => 'Kode RPS sudah digunakan untuk kodeMK dan tahun ajaran yang sama.'])->withInput();
        }
        // Menyimpan RPS baru 
        RPS::create([
            'tahunAjaran' => $request->tahunAjaran,
            'kodeMK' => $request->kodeMK,
            'semester' => $request->semester,
            'id_rps' => $id_rps,
            'nip' => $request->nip,
            'dibuat_oleh' => $request->nip
        ]);
        // create minggu rps
        for ($i = 0; $i < 14; $i++) {
            // Create a new RPS Minggu with the start date
            Minggu_RPS::create([
                'id_rps' => $id_rps,
                'kodeMingguRPS' => $id_rps . $i,
            ]);
        }

        Pengampu::create([
            'id_rps' => $id_rps,
            'kodeMK' => $request->kodeMK,
        ]);

        return redirect()->route('edit_rps.mata_kuliah', ['kodeRPS' => $id_rps])->with(['success' => 'Data RPS berhasil ditambahkan.', 'kodeRPS' => $id_rps]);
    }

    //NEW FUNCTION 2
    public function filterNewestYearSemester()
    {

        $newestYear = RPS::max('tahunAjaran');
        $newestSemester = RPS::where('tahunAjaran', $newestYear)->max('semester');
        $rps = RPS::where('tahunAjaran', $newestYear)->where('semester', $newestSemester)->get();

        return view('content.cari_rps', [
            'title' => 'RPS',
            'rps_list' => RPS::all(),
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'dosen_list' => User::all(),
            'mk_list' => Mata_Kuliah::all(),
            'minggu_rps_list' => Minggu_RPS::all(),
            'subcpmk_list' => SubCPMK::all(),
            'teknik_penilaian_list' => Teknik_Penilaian::all(),
            'rps' => $rps,

        ]);
    }

    // NEW FUNCTION 3
    public function detail($kodeRPS)
    {
        $kodeMK = substr($kodeRPS, 0, 6);
        $kodeCPMKList = Detail_MK_CPMK::all()->where('kodeMK', $kodeMK)->pluck('kodeCPMK')->toArray();
        $cpmk = CPMK::whereIn('kodeCPMK', $kodeCPMKList)->get();
        $kodeCPLList = $cpmk->pluck('kodeCPL')->toArray();
        $semuaCPL = CPL_Prodi::whereIn('kodeCPL', $kodeCPLList)->distinct()->get();
        $kodePrasyaratList = Prasyarat::all()->where('kodeMK', $kodeMK)->pluck('mat_kodeMK')->toArray();
        $prasyarat = Mata_Kuliah::whereIn('kodeMK', $kodePrasyaratList)->distinct()->get();

        return view('rps_mata_kuliah', [
            'title' => 'RPS Mata Kuliah',
            'kodeRPS' => $kodeRPS,
            'mata_kuliah' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
            'list_cpl' => $semuaCPL,
            'list_cpmk' => $cpmk,
            'list_prasyarat' => $prasyarat
        ]);
    }

    //NEW FUNCTION 4
    public function export_excel()
    {
        // $rps = RPS::where('tahunAjaran',2023)
        // ->with('Mata_Kuliah')->get();
        // $attributeNames = array_keys($rps->toArray()[0]);

        // dd($rps);
        return Excel::download(new ExportListRps, 'list_rps.xlsx');
    }

    //NEW FUNCTION 4
    public function export_filtered_excel($kodeMK)
    {
        return Excel::download(new ExportListFilteredRps($kodeMK), 'list_rps.xlsx');
    }
}
