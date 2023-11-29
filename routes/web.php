<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\BarangNotaController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/barang', [BarangController::class, 'index'])->name('index');

Route::get('/barang/create', [BarangController::class, 'create'])->name('insertBarang');

Route::post('/barang/store', [BarangController::class, 'store'])->name('store');

Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('edit');

Route::put('/barang/{id}', [BarangController::class, 'update'])->name('update');

Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('destroy');


