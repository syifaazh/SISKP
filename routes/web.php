<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//mahasiswa
Route::get('/pengajuan', [App\Http\Controllers\MahasiswaController::class, 'pengajuan'])->name('pengajuan');
Route::get('/berkas', [App\Http\Controllers\MahasiswaController::class, 'berkas'])->name('berkas');
Route::get('/laporan', [App\Http\Controllers\MahasiswaController::class, 'laporan'])->name('laporan');
Route::get('/jadwal', [App\Http\Controllers\MahasiswaController::class, 'jadwal'])->name('jadwal');
Route::get('/pengajuan_fix', [App\Http\Controllers\MahasiswaController::class, 'pengajuan_fix'])->name('pengajuan_fix');
Route::get('/laporan_fix', [App\Http\Controllers\MahasiswaController::class, 'laporan_fix'])->name('laporan_fix');  
Route::get('/berkas_fix', [App\Http\Controllers\MahasiswaController::class, 'berkas_fix'])->name('berkas_fix');

//dosen
Route::get('/role', [App\Http\Controllers\DosenController::class, 'role'])->name('role');
Route::get('/laporan_dos', [App\Http\Controllers\DosenController::class, 'laporan_dos'])->name('laporan_dos');
Route::get('/revisi', [App\Http\Controllers\DosenController::class, 'revisi'])->name('revisi');
Route::get('/jadwal_dos', [App\Http\Controllers\DosenController::class, 'jadwal_dos'])->name('jadwal_dos');
Route::get('/nilai', [App\Http\Controllers\DosenController::class, 'nilai'])->name('nilai');


//koordinator
Route::get('/pembimbing', [App\Http\Controllers\KoordinatorController::class, 'pembimbing'])->name('pembimbing');   
Route::get('/jadwal_koor', [App\Http\Controllers\KoordinatorController::class, 'jadwal_koor'])->name('jadwal_koor');
Route::get('/penilaian', [App\Http\Controllers\KoordinatorController::class, 'penilaian'])->name('penilaian');
Route::get('/atur_jadwal', [App\Http\Controllers\KoordinatorController::class, 'atur_jadwal'])->name('atur_jadwal');
Route::get('/laporan_koor', [App\Http\Controllers\KoordinatorController::class, 'laporan_koor'])->name('laporan_koor');

//Pembimbing Lapangan
Route::get('/akun', [App\Http\Controllers\Pem_lapanganController::class, 'akun'])->name('akun');
Route::get('/nilai_mhs', [App\Http\Controllers\Pem_lapanganController::class, 'nilai_mhs'])->name('nilai_mhs');
Route::get('/rekap_mhs', [App\Http\Controllers\Pem_lapanganController::class, 'rekap_mhs'])->name('rekap_mhs');