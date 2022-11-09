<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\InputPasienController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\HomeController;

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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/data_pasien',DataPasienController::class);

Route::resource('/input_data',InputPasienController::class);

Route::resource('/tiket',TiketController::class);

// Route::get('/action',[TiketController::class,'action'])->name('tiket.action');


Route::resource('/pesan',CetakController::class);

Route::get('cetak_pdf/{id}', [App\Http\Controllers\CetakController::class,'cetak_pdf'])->name('cetak_pdf');

// login
// Route::get('login',Login::class);

Auth::routes();

Route::get('/export/data_pasien',[App\Http\Controllers\DataPasienController::class, 'dataExport'])->name('dataExport');

Route::get('/export/Kunjungan&Tiket',[App\Http\Controllers\TiketController::class, 'tiketExport'])->name('tiketExport');
