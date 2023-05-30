<?php

namespace App\Http\Controllers;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\Detail_RPS;
use App\Models\RPS;
use App\Models\Teknik_Penilaian;
use App\Models\Minggu_RPS;
use App\Models\SubCPMK;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TeknikPenilaianCPMKExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class TeknikPenilaianCPMKController extends Controller
{
    public function index()
    {
        return view('content.teknik_penilaian_cpmk.teknik_penilaian', [
            'title' => 'Teknik Penilaian CPMK',
            'list_tahun_ajaran' => DB::select('SELECT DISTINCT tahunAjaran FROM RPS ORDER BY tahunAjaran DESC'),
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table($tahun_ajaran)
    {
        return view('content.teknik_penilaian_cpmk.matriks_tp_cpmk', [
            'title' => 'Teknik Penilaian CPMK',
            'list_cpl' => CPL_Prodi::all(),
            'list_mk' => Mata_Kuliah::all(),
            'detail_mk_cpmk' => Detail_MK_CPMK::all(),
            'list_rps' => RPS::all()->where('tahunAjaran', $tahun_ajaran),
            'list_teknikpenilaian' => Teknik_Penilaian::all(),
            'list_kolom' => ['MBKM', 'Partisipasi (Kehadiran / Quiz)', 'Observasi (Praktek / Tugas)', 'Unjuk Kerja (Presentasi)', 'UTS', 'Tes Tulis (UAS)', 'Tes Lisan (Tugas Kelompok)'],
            'list_minggurps' => Minggu_RPS::all(),
            'detail_rps' => Detail_RPS::all(),
            'list_subcpmk' => SubCPMK::all(),
            'list_cpmk' => CPMK::all(),
        ]);
    }

    public function exportFile($tahun_ajaran, $type)
    {
        date_default_timezone_set('Asia/Jakarta');

        $date_time = date('Y_m_d_H_i_s');

        if ($type == 'pdf') {
            $view = view('content.teknik_penilaian_cpmk.exportpdf_teknikpenilaiancpmk', [
                'list_cpl' => CPL_Prodi::all(),
                'list_mk' => Mata_Kuliah::all(),
                'detail_mk_cpmk' => Detail_MK_CPMK::all(),
                'list_rps' => RPS::all()->where('tahunAjaran', $tahun_ajaran),
                'list_teknikpenilaian' => Teknik_Penilaian::all(),
                'list_kolom' => ['MBKM', 'Partisipasi (Kehadiran / Quiz)', 'Observasi (Praktek / Tugas)', 'Unjuk Kerja (Presentasi)', 'UTS', 'Tes Tulis (UAS)', 'Tes Lisan (Tugas Kelompok)'],
                'list_minggurps' => Minggu_RPS::all(),
                'detail_rps' => Detail_RPS::all(),
                'list_subcpmk' => SubCPMK::all(),
                'tahun_ajaran' => $tahun_ajaran,
            ]);

            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();

            return Response::make($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=' . 'Teknik Penilaian CPMK Tahun Ajaran ' . $tahun_ajaran . "_" . $date_time . '.pdf'
            ]);
        } else {
            return Excel::download(new TeknikPenilaianExport($tahun_ajaran), 'Teknik Penilaian CPMK Tahun Ajaran ' . $tahun_ajaran . "_" . $date_time . '.xlsx');
        }
    }
    
    // public function cetakLaporanPDF($tahun_ajaran, $type, Request $request, Repository $config, Filesystem $files, Factory $view){
    //     $list_cpl = CPL_Prodi::all();
    //     $list_mk = Mata_Kuliah::all();
    //     $detail_mk_cpmk = Detail_MK_CPMK::all();
    //     $list_cpmk = CPMK::all();
    //     $list_rps = RPS::all();
    //     $list_teknikpenilaian = Teknik_Penilaian::all();
    //     $list_kolom = ['MBKM', 'Partisipasi (Kehadiran / Quiz)', 'Observasi (Praktek / Tugas)', 'Unjuk Kerja (Presentasi)', 'UTS', 'Tes Tulis (UAS)', 'Tes Lisan (Tugas Kelompok)'];
    //     $list_minggurps = Minggu_RPS::all();
    //     $detail_rps = Detail_RPS::all();
    //     $list_subcpmk = SubCPMK::all();       

    //     $data = [
    //         'judul' => 'Laporan Penilaian CPMK',
    //         'list_cpl' => $list_cpl,
    //         'list_mk' => $list_mk,
    //         'detail_mk_cpmk' => $detail_mk_cpmk,
    //         'list_cpmk' => $list_cpmk,
    //         'list_rps' => $list_rps,
    //         'list_teknikpenilaian' => $list_teknikpenilaian,
    //         'list_kolom' => $list_kolom,
    //         'list_minggurps' => $list_minggurps,
    //         'detail_rps'=> $detail_rps,
    //         'list_subcpmk' => $list_subcpmk
    //     ];

    //     $dompdf = new Dompdf();

    //     $pdf = new PDF($dompdf, $config, $files, $view, 'utf-8', 'A4', 'portrait');

    //     $pdf -> loadView('content.teknik_penilaian_cpmk.exportpdf_teknikpenilaiancpmk',$data);
        
    //     if ($request ->input('download')){
    //         return $pdf->download('Laporan Teknik Penilaian CPMK.pdf');
    //     }else{
    //         return $pdf->stream();
    //     }
    // }

    // public function cetakLaporanExcel(){
    // $judul = "Teknik Penilaian CPMK";
    // $list_cpl = CPL_Prodi::all();
    // $list_mk = Mata_Kuliah::all();
    // $detail_mk_cpmk = Detail_MK_CPMK::all();
    // $list_cpmk = CPMK::all();
    // $list_rps = RPS::all();
    // $list_teknikpenilaian = Teknik_Penilaian::all();
    // $list_kolom = ['MBKM', 'Partisipasi (Kehadiran / Quiz)', 'Observasi (Praktek / Tugas)', 'Unjuk Kerja (Presentasi)', 'UTS', 'Tes Tulis (UAS)', 'Tes Lisan (Tugas Kelompok)'];
    // $list_minggurps = Minggu_RPS::all();
    // $detail_rps = Detail_RPS::all();
    // $list_subcpmk = SubCPMK::all();    

    // return Excel::download(new TeknikPenilaianCPMKExport($judul, $list_cpl, $list_mk, $detail_mk_cpmk,  $list_cpmk, 
    // $list_rps, $list_teknikpenilaian, $list_kolom, $list_minggurps, $detail_rps, $list_subcpmk), 'Laporan Teknik Penilaian CPMK.xlsx');
    // }
    
    // public function viewExcel(){
    //     $judul = "Teknik Penilaian Capaian Pembelajaran Mata Kuliah (CPMK)";
    //     $list_cpl = CPL_Prodi::all();
    //     $list_mk = Mata_Kuliah::all();
    //     $detail_mk_cpmk = Detail_MK_CPMK::all();
    //     $list_cpmk = CPMK::all();
    //     $list_rps = RPS::all();
    //     $list_teknikpenilaian = Teknik_Penilaian::all();
    //     $list_kolom = ['MBKM', 'Partisipasi (Kehadiran / Quiz)', 'Observasi (Praktek / Tugas)', 'Unjuk Kerja (Presentasi)', 'UTS', 'Tes Tulis (UAS)', 'Tes Lisan (Tugas Kelompok)'];
    //     $list_minggurps = Minggu_RPS::all();
    //     $detail_rps = Detail_RPS::all();
    //     $list_subcpmk = SubCPMK::all();  

    //     return view('content.teknik_penilaian_cpmk.exportpdf_teknikpenilaiancpmk', 
    //     compact('judul', 'list_cpl','list_mk','detail_mk_cpmk','list_cpmk', 'list_rps', 'list_teknikpenilaian', 'list_kolom', 'list_minggurps', 'detail_rps', 'list_subcpmk'));
    // }
}
