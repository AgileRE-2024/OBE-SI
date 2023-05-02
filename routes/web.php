<?php

use App\Http\Controllers\BKMKController;
use App\Http\Controllers\PemetaanPlCplController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;   
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

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

// Route::get('/dashboard/home', function () {
//     return view('content.home', ['title' => 'Home OBE']);
// })->name('home');

Route::get('/login', function () {
    return view('content.login.login', ["title" => "Login OBE"]);
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/proseslogin', [LoginController::class, 'proseslogin'])->name('proseslogin');
Route::get('/loginfailed', [LoginController::class, 'loginfailed'])->name('loginfailed');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard/admin', function () {
        return view('content.login.homeadmin', ['title' => 'Home OBE']);
    });
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
    Route::get('/dashboard/admin', [LoginController::class, 'myprofile'])->name('myprofile');
});

Route::group(['middleware' => 'user'], function(){
    Route::get('/dashboard/penilaian', function() {
        return view('welcome');
    })->name('penilaian');
    
    Route::get('/dashboard/rps', function () {
        return view('content.rps', ['title' => 'RPS']);
    })->name('rps');

    Route::get('/dashboard/dosen', [LoginController::class, 'myprofile'])->name('myprofile');
});

Route::get('/ubahpw/{nip}', [LoginController::class, 'ubahpw'])->name('tampilprofile');
Route::post('/updateprofile/{nip}', [LoginController::class, 'updateprofile'])->name('updateprofile');

Route::get('/forgot-password',function(){
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
