<?php

use App\Models\RPS;
use App\Models\CPMK;
use App\Models\Kelas;
use App\Models\SubCPMK;
use App\Models\Mahasiswa;
use App\Models\Detail_RPS;
use App\Models\Minggu_RPS;
use App\Models\Mata_Kuliah;
use App\Models\Bahan_Kajian;
use App\Models\CPL_SN_Dikti;
use App\Models\Profil_Lulusan;
use App\Models\Detail_Peran_Dosen;
use Illuminate\Support\Facades\Route;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Http\Controllers\BKMKController;
use App\Http\Controllers\PemetaanCPLBKMK;
use App\Http\Controllers\PemetaanMkCpmkSubcpmk;
use App\Http\Controllers\PemetaanPlCplController;
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
        'CPL_SN_Dikti'=>CPL_SN_Dikti::first(),
        'Profil_Lulusan'=>Profil_Lulusan::first(),
        'Bahan_Kajian'=>Bahan_Kajian::first(),
        'Mata_Kuliah'=>Mata_Kuliah::first(),
        'RPS'=>RPS::first(),
        'Detail_Peran_Dosen'=>Detail_Peran_Dosen::all(),
        'CPMK'=>CPMK::first(),
        'SubCPMK'=>SubCPMK::first(),
        'Minggu_RPS'=>Minggu_RPS::first(),
        'Detail_RPS'=>Detail_RPS::all(),
        'Mahasiswa'=>Mahasiswa::first(),
        'Kelas'=>Kelas::first(),
        'Semua_Kelas'=>Kelas::all(),
        'Detail_Nilai_Mahasiswa'=>Detail_Nilai_Mahasiswa::all(),
    ]);
});

Route::prefix('/dashboard/kurikulum')->name('kurikulum.')->group(function () {
    Route::prefix('/pemetaan')->name('pemetaan.')->group(function () {
        // Route::get('/bk-mk', function () {
        //     return view('content.pemetaan_bk_mk.matriksBK_MK', ['title' => 'Pemetaan BK MK']);
        // })->name('bk_mk');

        Route::get('/bk-mk', [BKMKController::class,'index','title' => 'Pemetaan BK MK'])->name('bk_mk');

        Route::put('/bk-mk/update', [BKMKController::class, 'update'])->name('update_pemetaan_bk_mk');

        Route::get('/bk-mk/exportExcel', [BKMKController::class, 'exportExcel'])->name('exportExcel');
        Route::get('/bk-mk/exportPdf', [BKMKController::class, 'exportPdf'])->name('exportPdf');

        Route::get('/cpl-bk', function () {
            return view('welcome');
        })->name('cpl_bk');

        Route::get('/cpl-bk-mk',[PemetaanCPLBKMK::class,'index','title' => 'Pemetaan CPL BK MK'])->name('cpl_bk_mk');

        Route::get('/susunan-mata-kuliah', function () {
            return view('welcome');
        })->name('susunan_mata_kuliah');

        Route::get('/organisasi-mata-kuliah', function () {
            return view('welcome');
        })->name('organisasi_mata_kuliah');

        Route::get('/cpl-sndikti-cpl-prodi', function () {
            return view('welcome');
        })->name('cpl_sndikti_cpl_prodi');

        // Route::get('/cpl-mk', function () {
        //     return view('welcome');
        // })->name('cpl_mk');
        Route::get('/cpl-mk', [CPLMKController::class, 'index'])->name('cpl_mk');

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
   

        });
    });

Route::name('generatepdf')->get('/generate', [PDFController::class, 'generatePDF']);


    Route::prefix('/data')->name('data.')->group(function () {
        Route::get('/profil-lulusan', function () {
            return view('content.profil_lulusan', ['title' => 'Profil Lulusan']);
        })->name('profil_lulusan');

        Route::get('/cpl-sndikti', function () {
            return view('welcome');
        })->name('cpl_sndikti');

        Route::get('/cpl-prodi', function () {
            return view('welcome');
        })->name('cpl_prodi');

        Route::get('/bahan-kajian', function () {
            return view('welcome');
        })->name('bahan_kajian');

        Route::get('/mata-kuliah', function () {
            return view('welcome');
        })->name('mata_kuliah');
    });
});

Route::get('/dashboard/penilaian', function() {
    return view('welcome');
})->name('penilaian');

Route::get('/dashboard/rps', function () {
    return view('content.rps', ['title' => 'RPS',
    'minggu_rps_list'=> Minggu_RPS::all(),
    'rps_list'=>RPS::all(),
    'detail_rps_list'=>Detail_RPS::all()
]);
})->name('rps');

Route::get('/generate-pdf', 'PDFController@generatePDF');
