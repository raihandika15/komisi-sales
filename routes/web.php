<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekapKomisiController;
use App\Http\Controllers\PelangganBaruController;
use App\Http\Controllers\PengajuanKomisiController;
use App\Http\Controllers\PengajuanManualController;
use App\Http\Controllers\PengajuanTenderController;
use App\Models\PengajuanManual;
use App\Models\PengajuanTender;
use Faker\Guesser\Name;

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


// Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Pengajuan Komisi
    Route::get('/pengajuan_komisi', [\App\Http\Controllers\PengajuanKomisiController::class, 'index']);
    Route::post('/pengajuan_komisi_start', [\App\Http\Controllers\PengajuanKomisiStartController::class, 'insertData']);
    
    // Pengajuan Komisi Manual
    Route::get('/pengajuan_manual', [\App\Http\Controllers\PengajuanManualController::class, 'PengajuanManual']);
    Route::post('/pengajuan_manual_start', [PengajuanManualController::class, 'startPengajuan']);
    // Route::get('/home/destroy{id}', [HomeController::class, 'destroy']);
    
    // Pengajuan tender
    Route::get('/pengajuan_tender', [\App\Http\Controllers\PengajuanTenderController::class, 'PengajuanTender']);
    Route::post('/pengajuan_tender_start', [PengajuanTenderController::class, 'startPengajuanTender']);
    
    Route::get('/pelanggan_baru', [\App\Http\Controllers\PelangganBaruController::class, 'DataPelangganBaru']);
    Route::get('/rekap_komisi', [\App\Http\Controllers\RekapKomisiController::class, 'RekapKomisi']);
    
    // Route show data
    Route::get('/home', [HomeController::class, 'showData']);
    // Route::resource('pengajuan_tender', 'HomeController');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
