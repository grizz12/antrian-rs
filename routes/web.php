<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\InputPasienController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\CetakController;

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

Route::get('/home', function () {
    return view('home');
});

Route::resource('/data_pasien',DataPasienController::class);

Route::resource('/input_data',InputPasienController::class);

Route::resource('/tiket',TiketController::class);

//Route::resource('/pesan',CetakController::class);
// Route::get('/pesan', [App\Http\Controllers\CetakController::class, 'pesan']);

Route::resource('/pesan',CetakController::class);

Route::get('/cetak/pesan_pdf','App\Http\Controllers\CetakController@cetak_pdf');

// login
// Route::get('login',Login::class);
