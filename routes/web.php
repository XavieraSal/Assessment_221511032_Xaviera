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

// routes/web.php



// Index page - Display a list of barangs
Route::get('/barang', [BarangController::class, 'index'])->name('index');

// Create page - Display a form to create a new barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('insertBarang');

// Store - Store a newly created barang in the database
Route::post('/barang/store', [BarangController::class, 'store'])->name('store');

// Edit page - Display a form to edit the specified barang
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('edit');

// Update - Update the specified barang in the database
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('update');

// Destroy - Remove the specified barang from the database
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('destroy');


