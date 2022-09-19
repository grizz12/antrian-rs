<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\InputPasienController;
use App\Http\Controllers\TiketController;

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

Route::resource('/data_pasien',DataPasienController::class);

Route::resource('/input_data',InputPasienController::class);

Route::resource('/tiket',TiketController::class);

Route::get('/home', function () {
    return view('home');
});
Route::get('/pesan', function () {
    return view('tiket.Pesan.pesan');
});

// login
// Route::get('login',Login::class);
