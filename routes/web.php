<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BKMKController;
use App\Http\Controllers\PemetaanCPLBKMK;
use App\Http\Controllers\PemetaanPlCplController;

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

        Route::get('/bk-mk', [BKMKController::class,'index','title' => 'Pemetaan BK MK'])->name('bk_mk');

        Route::put('/bk-mk/update', [BKMKController::class, 'update'])->name('update_pemetaan_bk_mk');

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
    return view('content.rps', ['title' => 'RPS']);
})->name('rps');
