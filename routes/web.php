<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\RPS;
use App\Models\CPMK;
use App\Models\Kelas;
use App\Models\SubCPMK;
use Barryvdh\DomPDF\PDF;
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
use App\Http\Controllers\CRUDCPMKController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\BKMKController;
use App\Http\Controllers\CPMKController;
use App\Http\Controllers\CPLBKController;
use App\Http\Controllers\CPLMKController;
use App\Http\Controllers\MingguRPSController;
use App\Http\Controllers\PemetaanCPLBKMK;
use App\Http\Controllers\SubCPMKController;
use App\Http\Controllers\CPLDiktiController;
use App\Http\Controllers\CPLProdiController;
use App\Http\Controllers\PemetaanMkCpmkSubcpmk;
use App\Http\Controllers\PemetaanPlCplController;
use App\Http\Controllers\RpsController;
use App\Models\MataKuliah;
use App\Models\Teknik_Penilaian;
use App\Models\User;
use App\Http\Controllers\SusunanMKController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\BahanKajianController;
use App\Http\Controllers\OrganisasiMKController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\TeknikPenilaianController;
use App\Http\Controllers\PemetaanCplDiktiCplProdiController;
use App\Http\Controllers\TahapPenilaianController;
use App\Http\Controllers\TeknikPenilaianCPMKController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ManagementUser;

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

Route::get('/get-master-data/rps', [RPSController::class, 'getDataMaster']);

Route::get('/', function () {
    return view('content.login.login', ["tittle" => "Login OBE"]);
});

Route::get('/login', function () {
    return view('content.login.login', ["title" => "Login OBE"]);
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/proseslogin', [LoginController::class, 'proseslogin'])->name('proseslogin');
Route::get('/loginfailed', [LoginController::class, 'loginfailed'])->name('loginfailed');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout1');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout2');
Route::get('/test', function () {
    // $anggota = CPL_SN_Dikti::first();
    return view('test', [
        'CPL_SN_Dikti' => CPL_SN_Dikti::first(),
        'Profil_Lulusan' => Profil_Lulusan::first(),
        'Bahan_Kajian' => Bahan_Kajian::first(),
        'Mata_Kuliah' => Mata_Kuliah::first(),
        'RPS' => RPS::first(),
        'CPMK' => CPMK::first(),
        'SubCPMK' => SubCPMK::first(),
        'Minggu_RPS' => Minggu_RPS::first(),
        'Mahasiswa' => Mahasiswa::first(),
        'Kelas' => Kelas::first(),
        'Semua_Kelas' => Kelas::all(),
        'Detail_Nilai_Mahasiswa' => Detail_Nilai_Mahasiswa::all(),
    ]);
});

Route::get('/register', [ManagementUser::class, 'create'])->name('register');
Route::post('/storeUser', [ManagementUser::class, 'store'])->name('storeUser');

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/managementuser/list', [ManagementUser::class, 'index'])->name('listuser');
    Route::get('/management/edit/{nip}', [ManagementUser::class, 'edit'])->name('editUser');
    Route::put('/management/edit/{nip}', [ManagementUser::class, 'update'])->name('updateUser');
    Route::delete('/management/delete/{nip}', [ManagementUser::class,'destroy'])->name('deleteUser');
    });

Route::get('/dashboard/kurikulum', [LoginController::class, 'myprofile'])->name('profil kurikulum')->middleware('role:kurikulum');
Route::get('/dashboard/dosen', [LoginController::class, 'myprofile'])->name('profildosen')->middleware('role:dosen');
Route::get('/dashboard/admin', [LoginController::class, 'myprofile'])->name('profiladmin')->middleware('role:admin');
Route::get('/dashboard/dosen_kurikulum',[LoginController::class, 'myprofile'])->name('profildosen_admin')->middleware('role:dosen_kurikulum');

Route::prefix('/dashboard/kurikulum')->name('kurikulum.')->group(function () {
    Route::prefix('/pemetaan')->name('pemetaan.')->group(function () {

        Route::group(['middleware' => 'role:kurikulum,dosen_kurikulum'], function () {
            Route::put('/bk-mk/update', [BKMKController::class, 'update'])->name('update_pemetaan_bk_mk');

            Route::put('/cpl-bk/update', [CPLBKController::class, 'update'])->name('update_pemetaan_cpl_bk');

            Route::put('/susunan-mata-kuliah/update', [SusunanMKController::class, 'update'])->name('update_susunan_mk');

            Route::put('/cpl-sndikti-cpl-prodi/update', [PemetaanCplDiktiCplProdiController::class, 'update'])->name('update_pemetaan_cpldikti_cplprodi');

            Route::put('/cpl-pl/update', [PemetaanPlCplController::class, 'update'])->name('update_pemetaan_cpl_pl');
        });

        Route::get('/bk-mk', [BKMKController::class, 'index', 'title' => 'Pemetaan BK MK'])->name('bk_mk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/bk-mk/exportExcel', [BKMKController::class, 'exportExcel'])->name('exportExcel')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/bk-mk/exportPdf', [BKMKController::class, 'exportPdf'])->name('exportPdf')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl-bk', [CPLBKController::class, 'index', 'title' => 'Pemetaan CPL BK'])->name('cpl_bk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cetak-pdf-cplbk', [CPLBKController::class, 'cetakLaporanPDF'])->name('cetakpdfcplbk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cetak-excel-cplbk', [CPLBKController::class, 'cetakLaporanExcel'])->name('cetakexcelcplbk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl-bk-mk', [PemetaanCPLBKMK::class, 'index', 'title' => 'Pemetaan CPL BK MK'])->name('cpl_bk_mk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-bk-mk/exportPdf', [PemetaanCPLBKMK::class, 'exportPdf'])->name('exportPdfCplBkMk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-bk-mk/exportExcel', [PemetaanCPLBKMK::class, 'exportExcel'])->name('exportExcelCplBkMk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/susunan-mata-kuliah', [SusunanMKController::class, 'index'])->name('susunan_mata_kuliah')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/susunan-mata-kuliah/export/pdf', [SusunanMKController::class, 'exportToPDF'])->name('susunan_mk.export.pdf')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/susunan-mata-kuliah/export/excel', [SusunanMKController::class, 'exportToExcel'])->name('susunan_mk.export.excel')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/organisasi-mata-kuliah', [OrganisasiMKController::class, 'index'])->name('organisasi_mata_kuliah')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/organisasi-mata-kuliah/export/pdf', [OrganisasiMKController::class, 'exportToPDF'])->name('organisasi_mk.export.pdf')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/organisasi-mata-kuliah/export/excel', [OrganisasiMKController::class, 'exportToExcel'])->name('organisasi_mk.export.excel')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl-sndikti-cpl-prodi', [PemetaanCplDiktiCplProdiController::class, 'index'])->name('cpl_sndikti_cpl_prodi')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-sndikti-cpl-prodi/cetak', [PemetaanCplDiktiCplProdiController::class, 'cetak_pdf'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-sndikti-cpl-prodi/table', [PemetaanCplDiktiCplProdiController::class, 'table'])->name('table_cpldikti_cplprodi')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-sndikti-cpl-prodi/export/{type}', [PemetaanCplDiktiCplProdiController::class, 'export'])->name('export')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl-mk', [CPLMKController::class, 'index'])->name('cpl_mk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cetak-pdf-cplmk', [CPLMKController::class, 'cetakLaporanPDF'])->name('cetakpdfcplmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cetak-excel-cplmk', [CPLMKController::class, 'cetakLaporanExcel'])->name('cetakexcelcplmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl-pl', [PemetaanPlCplController::class, 'index'])->name('cpl_pl')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl-pl/export/{type}', [PemetaanPlCplController::class, 'export'])->name('export_cpl_pl')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::prefix('/cpl-cpmk-mk')->name('cpl_cpmk_mk.')->group(function () {

            Route::group(['middleware' => 'role:kurikulum,dosen_kurikulum'], function () {
                Route::name('add_cpmk')->get('/add_cpmk/{cpl}', [CPMKController::class, 'create']);
                Route::name('cpmk.store')->post('/add_cpmk', [CpmkController::class, 'store']);
                Route::name('edit_cpmk')->get('/edit_cpmk/{cpmk}', [CPMKController::class, 'edit']);
                Route::name('cpmk.update')->put('/edit_cpmk/{cpmk}', [CpmkController::class, 'update']);
            });

            Route::name('index')->get('/', [CPMKController::class, 'index'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
            Route::name('export')->get('/export', [CPMKController::class, 'cetakpdf'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
            Route::name('export-excel')->get('/exportexcel', [CPMKController::class, 'exportExcel'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
            Route::name('matrix')->get('/matriks', [CPMKController::class, 'matrix'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
            Route::name('exportmatrixpdf')->get('/exportmatrixpdf', [CPMKController::class, 'matrixcetakpdf'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
            Route::name('export-excelmatrix')->get('/exportexcelmatrix', [CPMKController::class, 'exportExcelmatrix'])->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        });

        Route::get('/mk-cpmk-subcpmk', [PemetaanMkCpmkSubcpmk::class, 'index', 'title' => 'Pemetaan MK CPMK SUBCPMK'])->name('mk_cpmk_subcpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/mk-cpmk-subcpmk/export/{type}', [PemetaanMkCpmkSubcpmk::class, 'export'])->name('export_mk-cpmk-subcpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
    });

    Route::name('generatepdf')->get('/generate', [PDFController::class, 'generatePDF']);
    Route::prefix('/data')->name('data.')->group(function () {

        Route::group(['middleware' => 'role:kurikulum,dosen_kurikulum'], function () {
            Route::get('/addProfilLulusan', [ProfilLulusanController::class, 'addProfilLulusan'])->name('add_pl');
            Route::post('/addProfilLulusan', [ProfilLulusanController::class, 'storeProfilLulusan'])->name('store_pl');
            Route::get('/editProfilLulusan/{pl}', [ProfilLulusanController::class, 'edit'])->name('edit_pl');
            Route::put('/editProfilLulusan/{pl}', [ProfilLulusanController::class, 'update'])->name('update_pl');
            Route::get('/deleteProfilLulusan/{pl}', [ProfilLulusanController::class, 'delete'])->name('delete_pl');

            Route::get('/addCPLDikti', [CPLDiktiController::class, 'addCPLDikti'])->name('add_cpl_dikti');
            Route::post('/addCPLDikti', [CPLDiktiController::class, 'storeCPLDikti'])->name('store_cpl_dikti');
            Route::get('/editCPLDikti/{cpl}', [CPLDiktiController::class, 'edit'])->name('edit_cpl_dikti');
            Route::put('/editCPLDikti/{cpl}', [CPLDiktiController::class, 'update'])->name('update_cpl_dikti');
            Route::get('/deleteCPLDikti/{cpl}', [CPLDiktiController::class, 'delete'])->name('delete_cpl_dikti');

            Route::get('/addCPLProdi', [CPLProdiController::class, 'addCPLProdi'])->name('add_cpl_prodi');
            Route::post('/addCPLProdi', [CPLProdiController::class, 'storeCPLProdi'])->name('store_cpl_prodi');
            Route::get('/editCPLProdi/{cpl}', [CPLProdiController::class, 'edit'])->name('edit_cpl_prodi');
            Route::put('/editCPLProdi/{cpl}', [CPLProdiController::class, 'updateCPLProdi'])->name('update_cpl_prodi');
            Route::get('/deleteCPLProdi/{cpl}', [CPLProdiController::class, 'deleteCPLProdi'])->name('delete_cpl_prodi');

            Route::get('/addBahanKajian', [BahanKajianController::class, 'addBahanKajian'])->name('add_bahan_kajian');
            Route::post('/addBahanKajian', [BahanKajianController::class, 'storeBahanKajian'])->name('store_bahan_kajian');
            Route::get('/editBahanKajian/{bk}', [BahanKajianController::class, 'editBahanKajian'])->name('edit_bahan_kajian');
            Route::put('/editBahanKajian/{bk}', [BahanKajianController::class, 'updateBahanKajian'])->name('update_bahan_kajian');
            Route::get('/deleteBahanKajian/{bk}', [BahanKajianController::class, 'deleteBahanKajian'])->name('delete_bahan_kajian');

            Route::get('/addMataKuliah', [MataKuliahController::class, 'addMataKuliah'])->name('add_mata_kuliah');
            Route::post('/addMataKuliah', [MataKuliahController::class, 'storeMataKuliah'])->name('store_mata_kuliah');
            Route::get('/editMataKuliah/{mk}', [MataKuliahController::class, 'editMataKuliah'])->name('edit_mata_kuliah');
            Route::put('/editMataKuliah/{mk}', [MataKuliahController::class, 'updateMataKuliah'])->name('update_mata_kuliah');
            Route::get('/deleteMataKuliah/{mk}', [MataKuliahController::class, 'deleteMataKuliah'])->name('delete_mata_kuliah');

            Route::get('/addCPMK', [CRUDCPMKController::class, 'create'])->name('add_cpmk');
            Route::post('/addCPMK', [CRUDCPMKController::class, 'store'])->name('store_cpmk');
            Route::get('/editCPMK/{cpmk}', [CRUDCPMKController::class, 'edit'])->name('edit_cpmk');
            Route::put('/editCPMK/{cpmk}', [CRUDCPMKController::class, 'update'])->name('update_cpmk');
            Route::get('/deleteCPMK/{cpmk}', [CRUDCPMKController::class, 'destroy'])->name('delete_cpmk');

            Route::get('/addSubCPMK', [SubCPMKController::class, 'addSubCPMK'])->name('add_sub_cpmk');
            Route::post('/addSubCPMK', [SubCPMKController::class, 'storeSubCPMK'])->name('store_sub_cpmk');
            Route::get('/editSubCPMK/{scpmk}', [SubCPMKController::class, 'editSubCPMK'])->name('edit_sub_cpmk');
            Route::put('/editSubCPMK/{scpmk}', [SubCPMKController::class, 'updateSubCPMK'])->name('update_sub_cpmk');
            Route::get('/deleteSubCPMK/{scpmk}', [SubCPMKController::class, 'deleteSubCPMK'])->name('delete_sub_cpmk');
        });

        Route::get('/profilLulusan', [ProfilLulusanController::class, 'index'])->name('profil_lulusan')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/profilLulusan/export/{type}', [ProfilLulusanController::class, 'export'])->name('export_pl')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl_dikti', [CPLDiktiController::class, 'index'])->name('cpl_sndikti')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl_dikti/export/{type}', [CPLDiktiController::class, 'export'])->name('export_cpl_dikti')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpl_prodi', [CPLProdiController::class, 'index'])->name('cpl_prodi')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpl_prodi/export/{type}', [CPLProdiController::class, 'export'])->name('export_cpl_prodi')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/bahan_kajian', [BahanKajianController::class, 'index'])->name('bahan_kajian')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/bahan_kajian/export/{type}', [BahanKajianController::class, 'export'])->name('export_bahan_kajian')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/mata_kuliah', [MataKuliahController::class, 'index'])->name('mata_kuliah')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/mata_kuliah/export/{type}', [MataKuliahController::class, 'export'])->name('export_mata_kuliah')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/cpmk', [CRUDCPMKController::class, 'index'])->name('cpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/cpmk/export/{type}', [CRUDCPMKController::class, 'export'])->name('export_cpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/sub_cpmk', [SubCPMKController::class, 'index'])->name('sub_cpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');
        Route::get('/sub_cpmk/export/{type}', [SubCPMKController::class, 'export'])->name('export_sub_cpmk')->middleware('role:admin,dosen,kurikulum,dosen_kurikulum');

        Route::get('/pustaka', [PustakaController::class, 'index'])->name('pustaka');
        Route::get('/addPustaka', [PustakaController::class, 'addPustaka'])->name('add_pustaka');
        Route::post('/addPustaka', [PustakaController::class, 'storePustaka'])->name('store_pustaka');
        Route::get('/editPustaka/{pustaka}', [PustakaController::class, 'edit'])->name('edit_pustaka');
            Route::put('/editPustaka/{pustaka}', [PustakaController::class, 'update'])->name('update_pustaka');
            Route::get('/deletePustaka/{pustaka}', [PustakaController::class, 'delete'])->name('delete_pustaka');
    });
});

Route::group(['middleware' => 'role:dosen,admin,kurikulum,dosen_kurikulum'], function () {
    Route::prefix('/dashboard/penilaian')->name('penilaian.')->group(function () {
        Route::prefix('/tahap-penilaian')->name('tahap_penilaian.')->group(function () {
            Route::get('/',[TahapPenilaianController::class, 'index'])->name('index');
            Route::get('/{tahun_ajaran}',[TahapPenilaianController::class, 'table'])->name('data_penilaian');
            Route::get('/export/{tahun_ajaran}/{type}', [TahapPenilaianController::class, 'exportFile'])->name('export');
        });

        Route::get('/penilaiancpmk', [TeknikPenilaianCPMKController::class, 'index'])->name('tp_cpmk');
        Route::get('/{tahun_ajaran}',[TeknikPenilaianCPMKController::class, 'table'])->name('data_penilaian');
        Route::get('/export/{tahun_ajaran}/{type}', [TeknikPenilaianCPMKController::class, 'exportFile'])->name('export');
    });

    Route::get('/dashboard/rps', [RPSController::class,'index', 'title'=>'RPS'])->name('rps');
    Route::get('/dashboard/rps/{kodeMK}', [RPSController::class,'filter_by_matkul', 'title'=>'RPS'])->name('rps.matkul');
    Route::get('/dashboard/cari_rps', [RPSController::class, 'filterNewestYearSemester'])->name('index');
    Route::post('/dashboard/cari_rps', [RPSController::class, 'processData'])->name('processForm');
    Route::get('/dashboard/rps/export/{type}/{kodeRPS}', [RPSController::class, 'export'])->name('export_rps');  
    Route::get('/generate-pdf', 'PDFController@generatePDF');
    //Export Excel     
    Route::get('/dashboard/rps/exportExcelRps', [RPSController::class,'export_excel'])->name('export_excel_rps');
    

    //NEW ROUTE NEWEST RPS
    // Route::get('/dashboard/list_rps', [RPSController::class,'filterNewestYearSemester', 'title'=>'RPS'])->name('rps');
});


Route::group(['middleware' => 'role:dosen,dosen_kurikulum'], function () {
    Route::prefix('/dashboard/rps/edit')->name('edit_rps.')->group(function () {
        Route::get('/rps/{kodeRPS}', [RPSController::class, 'show'])->name('rps_show');

        Route::get('/teknik_penilaian/{kodeRPS}', [TeknikPenilaianController::class, 'index'])->name('teknik_penilaian');
        // Route::get('/addTeknikPenilaian/{kodeRPS}', [TeknikPenilaianController::class, 'addTeknikPenilaian'])->name('add_teknik_penilaian');
        // Route::post('/addTeknikPenilaian/{kodeRPS}', [TeknikPenilaianController::class, 'storeTeknikPenilaian'])->name('store_teknik_penilaian');
        Route::get('/editTeknikPenilaian/{kodeRPS}', [TeknikPenilaianController::class, 'editTeknikPenilaian'])->name('edit_teknik_penilaian');
        Route::put('/editTeknikPenilaian/{tp}', [TeknikPenilaianController::class, 'updateTeknikPenilaian'])->name('update_teknik_penilaian');
        // Route::get('/deleteTeknikPenilaian/{tp}', [TeknikPenilaianController::class, 'deleteTeknikPenilaian'])->name('delete_teknik_penilaian');
        // Route::get('/teknik_pdf/export/{type}', [TeknikPenilaianController::class, 'export'])->name('export_teknik_penilaian');
        
        Route::get('/minggu_rps/{kodeRPS}', [MingguRPSController::class, 'index'])->name('minggu_rps');
        // Route::get('/add_minggu_rps/{kodeRPS}', [MingguRPSController::class, 'addMingguRPS'])->name('add_minggu_rps');
        // Route::post('/add_minggu_rps/{kodeRPS}', [MingguRPSController::class, 'storeMingguRPS'])->name('store_minggu_rps');
        Route::get('/edit_minggu_rps/{kodeMingguRPS}', [MingguRPSController::class, 'editMingguRPS'])->name('edit_minggu_rps');
        Route::put('/edit_minggu_rps/{kodeMingguRPS}', [MingguRPSController::class, 'updateMingguRPS'])->name('update_minggu_rps');
        // Route::get('/delete_minggu_rps/{kodeMingguRPS}/{kodeRPS}', [MingguRPSController::class, 'deleteMingguRPS'])->name('delete_minggu_rps');

        Route::get('/peran_dosen/{kodeRPS}', [DosenController::class, 'index'])->name('peran_dosen');
        Route::get('/edit_peran_dosen/{kodeRPS}', [DosenController::class, 'editPeranDosen'])->name('edit_peran_dosen');
        Route::put('/edit_peran_dosen/{kodeRPS}', [DosenController::class, 'updatePeranDosen'])->name('update_peran_dosen');
        // Route::get('/add_peran_dosen/{kodeRPS}', [DosenController::class, 'addPeranDosen'])->name('add_peran_dosen');
        // Route::post('/add_peran_dosen/{kodeRPS}', [DosenController::class, 'storePeranDosen'])->name('store_peran_dosen');
        // Route::get('/edit_peran_dosen/{nip}/{kodeRPS}/{peranDosen}', [DosenController::class, 'editPeranDosen'])->name('edit_peran_dosen');
        // Route::put('/edit_peran_dosen/{nip}/{kodeRPS}/{peranDosen}', [DosenController::class, 'updatePeranDosen'])->name('update_peran_dosen');
        // Route::get('/delete_peran_dosen/{nip}/{kodeRPS}/{peranDosen}', [DosenController::class, 'deletePeranDosen'])->name('delete_peran_dosen');
        
        Route::get('/mata_kuliah/{kodeRPS}', [RPSController::class, 'detail'])->name('mata_kuliah');

        // Route::get('/pustaka/{kodeRPS}', [PustakaController::class, 'detail'])->name('pustaka');
    });
    Route::get('/dashboard/rps/create', [RPSController::class, 'create'])->name('rps_create');
    Route::post('/dashboard/rps/store', [RPSController::class, 'store'])->name('rps_store');

    //ROUTE BARU SEGAF
    Route::post('/uploadImgTeknikPenilaian',[TeknikPenilaianController::class, 'uploadTeknikPenilaian'])->name('ckeditor.upload');

});

Route::get('/ubahpw/{nip}', [LoginController::class, 'ubahpw'])->name('tampilprofile');
Route::post('/updateprofile/{nip}', [LoginController::class, 'updateprofile'])->name('updateprofile');

Route::get('/forgot-password', function () {
    return view('content.login.auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('content.login.auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
