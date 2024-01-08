<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SeleksiController;

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

Route::middleware('auth')->group(function() {
Route::get('pendaftaran/laporan', [PendaftaranController::class, 'laporan'])->name('pendaftaran.laporan');
Route::get('pendaftaran/profil', [App\Http\Controllers\ProfilController::class, 'index']);
Route::resource('pendaftaran', App\Http\Controllers\PendaftaranController::class);
Route::get('seleksi/create', [App\Http\Controllers\SeleksiController::class, 'create'])->name('seleksi.create');
Route::resource('kelas', App\Http\Controllers\KelasController::class);
Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index']);
Route::resource('seleksi', SeleksiController::class);
} );



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
