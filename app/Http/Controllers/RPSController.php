<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\Prasyarat;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_Peran_Dosen;
use App\Models\Detail_RPS;
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

class RPSController extends Controller
{
    public function getDataMaster(){
        $rps = RPS::all();
        return response()->json($rps);
    }

    public function index()
    {
        // return view('content.cari_rps', [
        //     'title' => 'RPS',
        //     'rps_list'=> RPS::all(),
        //     'teknik_penilaian_list'=> Teknik_Penilaian::all(),
        //     'detail_rps_list'=> Detail_RPS::all(),
        //     'dosen_list'=> User::all(),
        //     'mk_list' => Mata_Kuliah::all(),
        //     'minggu_rps_list' => Minggu_RPS::all(),
        //     'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
        //     'subcpmk_list'=>SubCPMK::all(),
        //     'teknik_penilaian_list'=>Teknik_Penilaian::all(),
        // ]);
        
        $newestYear = RPS::max('tahunAjaran');
        $rps = RPS::where('tahunAjaran',$newestYear)->get();


        return view('cari_rps', [
            'title' => 'RPS',
            'rps_list'=> $rps,
            // 'teknik_penilaian_list'=> Teknik_Penilaian::all(),
            // 'detail_rps_list'=> Detail_RPS::all(),
            // 'dosen_list'=> User::all(),
            // 'mk_list' => Mata_Kuliah::all(),
            // 'minggu_rps_list' => Minggu_RPS::all(),
            // 'detail_peran_dosen_list' => Detail_Peran_Dosen::all(),
            // 'subcpmk_list'=>SubCPMK::all(),
            // 'teknik_penilaian_list'=>Teknik_Penilaian::all(),
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
            'dibuat_oleh' => 'required'
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
            'dibuat_oleh' => $request->dibuat_oleh
        ]);
        // create minggu rps
        for ($i = 0; $i < 14; $i++) {
            // Create a new RPS Minggu with the start date
            Minggu_RPS::create([
                'id_rps' => $id_rps,
                'kodeMingguRPS' => $id_rps.$i,
            ]);

        }
    
        return redirect()->route('edit_rps.mata_kuliah', ['kodeRPS' => $id_rps ])->with(['success' => 'Data RPS berhasil ditambahkan.', 'kodeRPS'=>$id_rps]);
    }
    
    //NEW FUNCTION 2
    public function filterNewestYearSemester(){

        $newestYear = RPS::max('tahunAjaran');
        $newestSemester = RPS::where('tahunAjaran',$newestYear)->max('semester');
        $rps = RPS::where('tahunAjaran',$newestYear)->where('semester',$newestSemester)->get();

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
            'rps' => $rps,

        ]);
    }

    // NEW FUNCTION 3
    public function detail($kodeRPS){
        $kodeMK = substr($kodeRPS, 0, 6);
        $cpmk_mk = Detail_MK_CPMK::all()->where('kodeMK', $kodeMK);
        $kodeCPMKList = $cpmk_mk->pluck('kodeCPMK')->toArray();
        $cpmk = CPMK::whereIn('kodeCPMK', $kodeCPMKList)->get();
        $kodeCPLList = $cpmk->pluck('kodeCPL')->toArray();
        $semuaCPL = CPL_Prodi::whereIn('kodeCPL', $kodeCPLList)->distinct()->get();
        $prasyarat = Prasyarat::all()->where('kodeMK', $kodeMK);
        $kodePrasyaratList = $prasyarat->pluck('mat_kodeMK')->toArray();
        $prasyarat = Mata_Kuliah::whereIn('kodeMK', $kodePrasyaratList)->distinct()->get();

        return view('rps_mata_kuliah', [
            'title' => 'RPS Mata Kuliah',
            'kodeRPS'=>$kodeRPS,
            'mata_kuliah' => Mata_Kuliah::where('kodeMK', $kodeMK)->first(),
            'list_cpl' => $semuaCPL,
            'list_cpmk' => $cpmk,
            'list_prasyarat' => $prasyarat
        ]);
    }
    
}
