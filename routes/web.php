<?php

use App\Http\Controllers\BKMKController;
use App\Http\Controllers\PemetaanPlCplController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\CPLDiktiController;
use App\Http\Controllers\CPLProdiController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\BahanKajianController;
use App\Models\Mata_Kuliah;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/dashboard/kurikulum')->name('kurikulum.')->group(function () {
    Route::prefix('/pemetaan')->name('pemetaan.')->group(function () {
        // Route::get('/bk-mk', function () {
        //     return view('content.pemetaan_bk_mk.matriksBK_MK', ['title' => 'Pemetaan BK MK']);
        // })->name('bk_mk');

        Route::get('/bk-mk', [BKMKController::class, 'index', 'title' => 'Pemetaan BK MK'])->name('bk_mk');

        Route::put('/bk-mk/update', [BKMKController::class, 'update'])->name('update_pemetaan_bk_mk');

        Route::get('/cpl-bk', function () {
            return view('welcome');
        })->name('cpl_bk');

        Route::get('/cpl-bk-mk', function () {
            return view('welcome');
        })->name('cpl_bk_mk');

        Route::get('/susunan-mata-kuliah', function () {
            return view('welcome');
        })->name('susunan_mata_kuliah');

        Route::get('/organisasi-mata-kuliah', function () {
            return view('welcome');
        })->name('organisasi_mata_kuliah');

        Route::get('/cpl-sndikti-cpl-prodi', function () {
            return view('welcome');
        })->name('cpl_sndikti_cpl_prodi');

        Route::get('/cpl-mk', function () {
            return view('welcome');
        })->name('cpl_mk');

        Route::get('/cpl-pl', [PemetaanPlCplController::class, 'index'])->name('cpl_pl');
        Route::get('/cpl-pl/table', [PemetaanPlCplController::class, 'table'])->name('table_cpl_pl');
        Route::post('/cpl-pl/update', [PemetaanPlCplController::class, 'update'])->name('update_pemetaan_cpl_pl');
        Route::get('/cpl-pl/export/{type}', [PemetaanPlCplController::class, 'export'])->name('export');

        Route::get('/cpl-cpmk-mk', function () {
            return view('welcome');
        })->name('cpl_cpmk_mk');
    });



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
    return view('content.rps', ['title' => 'RPS']);
})->name('rps');
