<?php

use App\Models\Bahan_Kajian;
use App\Models\CPL_SN_Dikti;
use App\Models\Detail_Peran_Dosen;
use App\Models\Mata_Kuliah;
use App\Models\Profil_Lulusan;
use App\Models\RPS;
use App\Models\CPMK;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Models\Minggu_RPS;
use App\Models\Detail_RPS;
use App\Models\SubCPMK;
use App\Models\Mahasiswa;
use App\Models\Kelas;
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

Route::get('/', function () {
    return view('welcome');
});

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

