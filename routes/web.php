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
