<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\Mahasiswa\MahasiswaController as MahasiswaController_Mahasiswa;

use App\Http\Controllers\Sekprodi\SekprodiController as SekprodiController_Sekprodi;
use App\Http\Controllers\Sekprodi\HariController as HariController_Sekprodi;
use App\Http\Controllers\Sekprodi\Ruang_KelasController as Ruang_KelasController_Sekprodi;
use App\Http\Controllers\Sekprodi\KrsController as KrsController_Sekprodi;
use App\Http\Controllers\Sekprodi\MahasiswaController as MahasiswaController_Sekprodi;
use App\Http\Controllers\Sekprodi\DosenController as DosenController_Sekprodi;
use App\Http\Controllers\Sekprodi\MatakuliahController as MatakuliahController_Sekprodi;
use App\Http\Controllers\Sekprodi\ProdiController as ProdiController_Sekprodi;
use App\Http\Controllers\Sekprodi\Dosen_PengampuController as Dosen_PengampuController_Sekprodi;

use App\Http\Controllers\Dosen\DosenController as DosenController_Dosen;

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
Route::get('/mahasiswa', [MahasiswaController_Mahasiswa::class, 'index']);

//SEKPRODI
Route::get('/sekprodi', [SekprodiController_Sekprodi::class, 'index']);
Route::get('/sekprodi/hari', [HariController_Sekprodi::class, 'index']);
Route::get('/sekprodi/ruang_kelas', [Ruang_KelasController_Sekprodi::class, 'index']);
Route::get('/sekprodi/krs', [KrsController_Sekprodi::class, 'index']);
Route::get('/sekprodi/mahasiswa', [MahasiswaController_Sekprodi::class, 'index']);
Route::get('/sekprodi/dosen', [DosenController_Sekprodi::class, 'index']);
Route::get('/sekprodi/matakuliah', [MatakuliahController_Sekprodi::class, 'index']);
Route::get('/sekprodi/prodi', [ProdiController_Sekprodi::class, 'index']);
Route::get('/sekprodi/dosen_pengampu', [Dosen_PengampuController_Sekprodi::class, 'index']);
Route::get('/sekprodi/laporan_mahasiswa', [SekprodiController_Sekprodi::class, 'laporan_mahasiswa']);
Route::get('/sekprodi/laporan_dosen', [SekprodiController_Sekprodi::class, 'laporan_dosen']);
Route::get('/sekprodi/laporan_matakuliah', [SekprodiController_Sekprodi::class, 'laporan_matakuliah']);
Route::get('/sekprodi/laporan_dosen_pengampu', [SekprodiController_Sekprodi::class, 'laporan_dosen_pengampu']);

//DOSEN
Route::get('/dosen', [DosenController_Dosen::class, 'index']);
Route::get('/dosen/absensi', [DosenController_Dosen::class, 'absensi']);
Route::get('/dosen/tugas', [DosenController_Dosen::class, 'tugas']);
Route::get('/dosen/nilai', [DosenController_Dosen::class, 'nilai']);
Route::get('/dosen/krs', [DosenController_Dosen::class, 'krs']);
Route::get('/dosen/bap_dosen', [DosenController_Dosen::class, 'bap_dosen']);
Route::get('/dosen/presensi_nilai', [DosenController_Dosen::class, 'presensi_nilai']);
Route::get('/dosen/dosen_pengampu', [DosenController_Dosen::class, 'dosen_pengampu']);
Route::get('/dosen/bap_absensi', [DosenController_Dosen::class, 'bap_absensi']);
Route::get('/dosen/laporan_bap_absensi', [DosenController_Dosen::class, 'laporan_bap_absensi']);
Route::get('/dosen/laporan_bap_dosen', [DosenController_Dosen::class, 'laporan_bap_dosen']);
Route::get('/dosen/laporan_presensi_nilai', [DosenController_Dosen::class, 'laporan_presensi_nilai']);
Route::get('/dosen/laporan_dosen_pengampu', [DosenController_Dosen::class, 'laporan_dosen_pengampu']);