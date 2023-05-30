<?php


use App\Models\RPS;
use App\Models\CPMK;
use App\Models\Kelas;
use App\Models\SubCPMK;
use App\Models\Mahasiswa;
use App\Models\Detail_RPS;
use App\Models\Minggu_RPS;
use App\Models\Bahan_Kajian;
use App\Models\CPL_SN_Dikti;
use App\Models\Profil_Lulusan;
use App\Models\Detail_Peran_Dosen;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\CPLDiktiController;
use App\Http\Controllers\CPLProdiController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\BahanKajianController;
use App\Models\Mata_Kuliah;
use Illuminate\Support\Facades\Route;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Http\Controllers\BKMKController;
use App\Http\Controllers\PemetaanCPLBKMK;
use App\Http\Controllers\PemetaanMkCpmkSubcpmk;
use App\Http\Controllers\PemetaanPlCplController;
use App\Http\Controllers\SusunanMKController;
use App\Http\Controllers\OrganisasiMKController;
use App\Http\Controllers\CPLMKController;
use App\Http\Controllers\CPMKController;
use App\Http\Controllers\PDFController;
use Barryvdh\DomPDF\PDF;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard/home', function () {
    return view('content.home', ['title' => 'Home OBE']);
})->name('home');

Route::get('/test', function () {
    // $anggota = CPL_SN_Dikti::first();
    return view('test', [
        'CPL_SN_Dikti' => CPL_SN_Dikti::first(),
        'Profil_Lulusan' => Profil_Lulusan::first(),
        'Bahan_Kajian' => Bahan_Kajian::first(),
        'Mata_Kuliah' => Mata_Kuliah::first(),
        'RPS' => RPS::first(),
        'Detail_Peran_Dosen' => Detail_Peran_Dosen::all(),
        'CPMK' => CPMK::first(),
        'SubCPMK' => SubCPMK::first(),
        'Minggu_RPS' => Minggu_RPS::first(),
        'Detail_RPS' => Detail_RPS::all(),
        'Mahasiswa' => Mahasiswa::first(),
        'Kelas' => Kelas::first(),
        'Semua_Kelas' => Kelas::all(),
        'Detail_Nilai_Mahasiswa' => Detail_Nilai_Mahasiswa::all(),
    ]);
});

Route::prefix('/dashboard/kurikulum')->name('kurikulum.')->group(function () {
    Route::prefix('/pemetaan')->name('pemetaan.')->group(function () {
        // Route::get('/bk-mk', function () {
        //     return view('content.pemetaan_bk_mk.matriksBK_MK', ['title' => 'Pemetaan BK MK']);
        // })->name('bk_mk');

        Route::get('/bk-mk', [BKMKController::class, 'index', 'title' => 'Pemetaan BK MK'])->name('bk_mk');

        Route::put('/bk-mk/update', [BKMKController::class, 'update'])->name('update_pemetaan_bk_mk');

        Route::get('/bk-mk/exportExcel', [BKMKController::class, 'exportExcel'])->name('exportExcel');
        Route::get('/bk-mk/exportPdf', [BKMKController::class, 'exportPdf'])->name('exportPdf');

        Route::get('/cpl-bk', function () {
            return view('welcome');
        })->name('cpl_bk');

        Route::get('/cpl-bk-mk', [PemetaanCPLBKMK::class, 'index', 'title' => 'Pemetaan CPL BK MK'])->name('cpl_bk_mk');

        Route::get('/susunan-mata-kuliah', [SusunanMKController::class, 'index'])->name('susunan_mata_kuliah');

        Route::put('/susunan-mata-kuliah/update', [SusunanMKController::class, 'update'])->name('update_susunan_mk');

        Route::get('/susunan-mata-kuliah/export/pdf', [SusunanMKController::class, 'exportToPDF'])->name('susunan_mk.export.pdf');

        Route::get('/susunan-mata-kuliah/export/excel', [SusunanMKController::class, 'exportToExcel'])->name('susunan_mk.export.excel');

        Route::get('/organisasi-mata-kuliah', [OrganisasiMKController::class, 'index'])->name('organisasi_mata_kuliah');

        Route::get('/organisasi-mata-kuliah/export/pdf', [OrganisasiMKController::class, 'exportToPDF'])->name('organisasi_mk.export.pdf');

        Route::get('/organisasi-mata-kuliah/export/excel', [OrganisasiMKController::class, 'exportToExcel'])->name('organisasi_mk.export.excel');

        Route::get('/cpl-sndikti-cpl-prodi', function () {
            return view('welcome');
        })->name('cpl_sndikti_cpl_prodi');

        // Route::get('/cpl-mk', function () {
        //     return view('welcome');
        // })->name('cpl_mk');
        Route::get('/cpl-mk', [CPLMKController::class, 'index'])->name('cpl_mk');
        Route::get('/cetak-pdf-cplmk', [CPLMKController::class, 'cetakLaporanPDF'])->name('cetakpdfcplmk');
        Route::get('/cetak-excel-cplmk', [CPLMKController::class, 'cetakLaporanExcel'])->name('cetakexcelcplmk');
        // Route::get('/cpl-mk/exportcplmk/{type}', [CPLMKController::class, 'exportcplmk'])->name('exportcplmk');

        Route::get('/cpl-pl', [PemetaanPlCplController::class, 'index'])->name('cpl_pl');
        Route::put('/cpl-pl/update', [PemetaanPlCplController::class, 'update'])->name('update_pemetaan_cpl_pl');
        Route::get('/cpl-pl/export/{type}', [PemetaanPlCplController::class, 'export'])->name('export_cpl_pl');

        Route::prefix('/cpl-cpmk-mk')->name('cpl_cpmk_mk.')->group(function () {
            Route::name('index')->get('/', [CPMKController::class, 'index']);
            Route::name('add_cpmk')->get('/add_cpmk/{cpl}', [CPMKController::class, 'create']);
            Route::name('cpmk.store')->post('/add_cpmk', [CpmkController::class, 'store']);
            Route::name('edit_cpmk')->get('/edit_cpmk/{cpmk}', [CPMKController::class, 'edit']);
            Route::name('cpmk.update')->put('/edit_cpmk/{cpmk}', [CpmkController::class, 'update']);
            Route::name('export')->get('/export', [CPMKController::class, 'cetakpdf']);
            Route::name('export-excel')->get('/exportexcel', [CPMKController::class, 'exportExcel']);
            Route::name('matrix')->get('/matriks', [CPMKController::class, 'matrix']);
            Route::name('exportmatrixpdf')->get('/exportmatrixpdf', [CPMKController::class, 'matrixcetakpdf']);
            Route::name('export-excelmatrix')->get('/exportexcelmatrix', [CPMKController::class, 'exportExcelmatrix']);
        });
    });

    Route::name('generatepdf')->get('/generate', [PDFController::class, 'generatePDF']);



    Route::prefix('/data')->name('data.')->group(function () {
        Route::get('/profilLulusan', [ProfilLulusanController::class, 'index'])->name('profil_lulusan');
        Route::get('/addProfilLulusan', [ProfilLulusanController::class, 'addProfilLulusan'])->name('add_pl');
        Route::post('/addProfilLulusan', [ProfilLulusanController::class, 'storeProfilLulusan'])->name('store_pl');
        Route::get('/editProfilLulusan/{pl}', [ProfilLulusanController::class, 'edit'])->name('edit_pl');
        Route::put('/editProfilLulusan/{pl}', [ProfilLulusanController::class, 'update'])->name('update_pl');
        Route::get('/deleteProfilLulusan/{pl}', [ProfilLulusanController::class, 'delete'])->name('delete_pl');
        Route::get('/profilLulusan/export/{type}', [ProfilLulusanController::class, 'export'])->name('export_pl');

        Route::get('/cpl_dikti', [CPLDiktiController::class, 'index'])->name('cpl_sndikti');
        Route::get('/addCPLDikti', [CPLDiktiController::class, 'addCPLDikti'])->name('add_cpl_dikti');
        Route::post('/addCPLDikti', [CPLDiktiController::class, 'storeCPLDikti'])->name('store_cpl_dikti');
        Route::get('/editCPLDikti/{cpl}', [CPLDiktiController::class, 'edit'])->name('edit_cpl_dikti');
        Route::put('/editCPLDikti/{cpl}', [CPLDiktiController::class, 'update'])->name('update_cpl_dikti');
        Route::get('/deleteCPLDikti/{cpl}', [CPLDiktiController::class, 'delete'])->name('delete_cpl_dikti');
        Route::get('/cpl_dikti/export/{type}', [CPLDiktiController::class, 'export'])->name('export_cpl_dikti');


        Route::get('/cpl_prodi', [CPLProdiController::class, 'index'])->name('cpl_prodi');
        Route::get('/addCPLProdi', [CPLProdiController::class, 'addCPLProdi'])->name('add_cpl_prodi');
        Route::post('/addCPLProdi', [CPLProdiController::class, 'storeCPLProdi'])->name('store_cpl_prodi');
        Route::get('/editCPLProdi/{cpl}', [CPLProdiController::class, 'edit'])->name('edit_cpl_prodi');
        Route::put('/editCPLProdi/{cpl}', [CPLProdiController::class, 'updateCPLProdi'])->name('update_cpl_prodi');
        Route::get('/deleteCPLProdi/{cpl}', [CPLProdiController::class, 'deleteCPLProdi'])->name('delete_cpl_prodi');
        Route::get('/cpl_prodi/export/{type}', [CPLProdiController::class, 'export'])->name('export_cpl_prodi');

        Route::get('/bahan_kajian', [BahanKajianController::class, 'index'])->name('bahan_kajian');
        Route::get('/addBahanKajian', [BahanKajianController::class, 'addBahanKajian'])->name('add_bahan_kajian');
        Route::post('/addBahanKajian', [BahanKajianController::class, 'storeBahanKajian'])->name('store_bahan_kajian');
        Route::get('/editBahanKajian/{bk}', [BahanKajianController::class, 'editBahanKajian'])->name('edit_bahan_kajian');
        Route::put('/editBahanKajian/{bk}', [BahanKajianController::class, 'updateBahanKajian'])->name('update_bahan_kajian');
        Route::get('/deleteBahanKajian/{bk}', [BahanKajianController::class, 'deleteBahanKajian'])->name('delete_bahan_kajian');
        Route::get('/bahan_kajian/export/{type}', [BahanKajianController::class, 'export'])->name('export_bahan_kajian');


        Route::get('/mata_kuliah', [MataKuliahController::class, 'index'])->name('mata_kuliah');
        Route::get('/addMataKuliah', [MataKuliahController::class, 'addMataKuliah'])->name('add_mata_kuliah');
        Route::post('/addMataKuliah', [MataKuliahController::class, 'storeMataKuliah'])->name('store_mata_kuliah');
        Route::get('/editMataKuliah/{mk}', [MataKuliahController::class, 'editMataKuliah'])->name('edit_mata_kuliah');
        Route::put('/editMataKuliah/{mk}', [MataKuliahController::class, 'updateMataKuliah'])->name('update_mata_kuliah');
        Route::get('/deleteMataKuliah/{mk}', [MataKuliahController::class, 'deleteMataKuliah'])->name('delete_mata_kuliah');
        Route::get('/mata_kuliah/export/{type}', [MataKuliahController::class, 'export'])->name('export_mata_kuliah');
    });
});

Route::get('/dashboard/penilaian', function () {
    return view('welcome');
})->name('penilaian');

Route::get('/dashboard/rps', function () {
    return view('content.rps', [
        'title' => 'RPS',
        'minggu_rps_list' => Minggu_RPS::all(),
        'rps_list' => RPS::all(),
        'detail_rps_list' => Detail_RPS::all()
    ]);
})->name('rps');

Route::get('/generate-pdf', 'PDFController@generatePDF');
