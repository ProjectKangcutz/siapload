<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\SkpwniController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/kartukeluargas/tambah', [KartuKeluargaController::class, 'tambahberkas'])->name('kartukeluarga.tambahberkas');
Route::get('/kartukeluargas/upload', [KartuKeluargaController::class, 'uploadberkas'])->name('kartukeluarga.uploadberkas');
Route::get('/kartukeluargas/carikk', [KartuKeluargaController::class, 'carikk'])->name('kartukeluarga.carikk');
Route::resource('kartukeluargas', KartuKeluargaController::class);

Route::get('/skpwnis/cariskpwni', [SkpwniController::class, 'cariskpwni'])->name('skpwni.cariskpwni');
Route::get('/skpwnis/tambah', [SkpwniController::class, 'tambahberkas'])->name('skpwni.tambahberkas');
Route::get('/skpwnis/upload', [SkpwniController::class, 'uploadberkas'])->name('skpwni.uploadberkas');
Route::resource('skpwnis', SkpwniController::class);