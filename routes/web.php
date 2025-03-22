<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\NilaiController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa_insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa_edit', [MahasiswaController::class, 'edit']);

Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi_insert', [ProdiController::class, 'insert']);
Route::get('/prodi_edit', [ProdiController::class, 'edit']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah_insert', [MatakuliahController::class, 'insert']);
Route::get('/matakuliah_edit', [MatakuliahController::class, 'edit']);

Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/nilai_insert', [NilaiController::class, 'insert']);
Route::get('/nilai_edit', [NilaiController::class, 'edit']);