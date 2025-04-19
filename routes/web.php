<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SekprodiController;
use App\Http\Controllers\DosenController;

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
Route::get('/login', [LoginController::class, 'index']);

//MAHASISWA
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


//SEKPRODI
Route::get('/sekprodi', [SekprodiController::class, 'index']);
Route::get('/sekprodi/hari', [SekprodiController::class, 'hari']);
Route::get('/sekprodi/ruang_kelas', [SekprodiController::class, 'ruang_kelas']);
Route::get('/sekprodi/krs', [SekprodiController::class, 'krs']);
Route::get('/sekprodi/mahasiswa', [SekprodiController::class, 'mahasiswa']);
Route::get('/sekprodi/dosen', [SekprodiController::class, 'dosen']);
Route::get('/sekprodi/matakuliah', [SekprodiController::class, 'matakuliah']);
Route::get('/sekprodi/prodi', [SekprodiController::class, 'prodi']);
Route::get('/sekprodi/dosen_pengampu', [SekprodiController::class, 'dosen_pengampu']);
Route::get('/sekprodi/laporan_mahasiswa', [SekprodiController::class, 'laporan_mahasiswa']);
Route::get('/sekprodi/laporan_dosen', [SekprodiController::class, 'laporan_dosen']);
Route::get('/sekprodi/laporan_matakuliah', [SekprodiController::class, 'laporan_matakuliah']);
Route::get('/sekprodi/laporan_dosen_pengampu', [SekprodiController::class, 'laporan_dosen_pengampu']);


//DOSEN
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/absensi', [DosenController::class, 'absensi']);
Route::get('/dosen/tugas', [DosenController::class, 'tugas']);
Route::get('/dosen/nilai', [DosenController::class, 'nilai']);
Route::get('/dosen/krs', [DosenController::class, 'krs']);
Route::get('/dosen/bap_dosen', [DosenController::class, 'bap_dosen']);
Route::get('/dosen/presensi_nilai', [DosenController::class, 'presensi_nilai']);
Route::get('/dosen/dosen_pengampu', [DosenController::class, 'dosen_pengampu']);
Route::get('/dosen/bap_absensi', [DosenController::class, 'bap_absensi']);
Route::get('/dosen/bap_absensi', [DosenController::class, 'bap_absensi']);
Route::get('/dosen/laporan_bap_absensi', [DosenController::class, 'laporan_bap_absensi']);
Route::get('/dosen/laporan_bap_dosen', [DosenController::class, 'laporan_bap_dosen']);
Route::get('/dosen/laporan_presensi_nilai', [DosenController::class, 'laporan_presensi_nilai']);
Route::get('/dosen/laporan_dosen_pengampu', [DosenController::class, 'laporan_dosen_pengampu']);