<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('pendaftaran', PendaftaranController::class);

Route::resource('kelas', App\Http\Controllers\KelasController::class);

Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
