<?php

use App\Models\Record;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

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

// Route untuk menampilkan halaman index berisi semua catatan rekaman medis
Route::get('/record', [RecordController::class, 'index'])->name('record.index');

// Route untuk menampilkan halaman form menambahkan data rekaman ke database
Route::get('/record/add', [RecordController::class, 'addview'])->name('record.addview');

// Route untuk menambahkan data rekaman ke database ketika klik submit rekaman
Route::post('/record', [RecordController::class, 'add'])->name('record.add');

// Route untuk menampilkan halaman edit record
Route::get('/record/{record}/editview', [RecordController::class, 'editview'])->name('record.editview');

// Route untuk melakukan update terhadap data rekaman
Route::put('/record/{record}/update', [RecordController::class, 'update'])->name('record.update');
