<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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

Route::get('/Login', [MasterController::class, 'Login'])->name('Login');
Route::post('/AuthLogin', [MasterController::class, 'AuthLogin'])->name('AuthLogin');
Route::get('/Logout', [MasterController::class, 'Logout'])->name('Logout');

Route::middleware(['Login'])->group(function() {
    Route::get('/', [MasterController::class, 'Dashboard'])->name('Dashboard');
    Route::get('/PengaturanProfile/{username}', [MasterController::class, 'PengaturanProfile']);
    Route::post('/AuthPengaturanProfile', [MasterController::class, 'AuthPengaturanProfile'])->name('AuthPengaturanProfile');
    Route::get('/DataAbsensi', [MasterController::class, 'DataAbsensi'])->name('DataAbsensi');
    Route::get('/DataGaji', [MasterController::class, 'DataGaji'])->name('DataGaji');
    // Khusus Manajer
    Route::get('/DataKaryawan', [MasterController::class, 'DataKaryawan'])->name('DataKaryawan');
    Route::get('/TambahKaryawan', [MasterController::class, 'TambahKaryawan'])->name('TambahKaryawan');
    Route::post('/AuthTambahKaryawan', [MasterController::class, 'AuthTambahKaryawan'])->name('AuthTambahKaryawan');
    Route::get('/EditKaryawan/{id}', [MasterController::class, 'EditKaryawan'])->name('EditKaryawan');
    Route::post('/AuthEditKaryawan', [MasterController::class, 'AuthEditKaryawan'])->name('AuthEditKaryawan');
    Route::get('/HapusKaryawan/{id}', [MasterController::class, 'HapusKaryawan'])->name('HapusKaryawan');
    Route::post('/AuthHapusKaryawan', [MasterController::class, 'AuthHapusKaryawan'])->name('AuthHapusKaryawan');
    Route::get('/KonfirmasiGaji/{id}', [MasterController::class, 'KonfirmasiGaji'])->name('KonfirmasiGaji');
    Route::post('/AuthKonfirmasiGaji', [MasterController::class, 'AuthKonfirmasiGaji'])->name('AuthKonfirmasiGaji');
    // Khusus Karyawan
    Route::get('/TambahAbsensi', [MasterController::class, 'TambahAbsensi'])->name('TambahAbsensi');
    Route::post('/AuthTambahAbsensi', [MasterController::class, 'AuthTambahAbsensi'])->name('AuthTambahAbsensi');
});

Route::get('/Time/{hari}/{bulan}/{tahun}', [MasterController::class, 'Time']);
