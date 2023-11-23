<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit']) ->middleware(['auth', 'verified'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');
});
Route::get('/events/create', [EventPdtController::class, 'create'])->middleware(['auth', 'verified'])->name('events.createKegiatan');
Route::post('/events', [EventPdtController::class, 'store'])->middleware(['auth', 'verified'])->name('events.store');
Route::get('/events', [EventPdtController::class, 'berhasil'])->middleware(['auth', 'verified'])->name('events.berhasil');
Route::delete('/events/{id}', [EventPdtController::class, 'hapusKegiatan'])->middleware(['auth', 'verified'])->name('events.hapusKegiatan');
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->middleware(['auth', 'verified'])->name('events.donasi');
Route::get('/donation',[EventPdtController::class, 'donasi'])->middleware(['auth', 'verified'])->name('events.donation');

Route::post('/donations', [DonationController::class, 'store'])->middleware(['auth', 'verified'])->name('donations.store');
Route::get('/donations', [DonationController::class, 'berhasilDonasi'])->middleware(['auth', 'verified'])->name('donations.berhasil');
Route::put('/donations/update-status/{id}', [DonationController::class, 'updateStatus'])
    ->middleware(['auth', 'verified'])->name('donations.updateStatus');
Route::get('admin/donations', [DonationController::class, 'viewDonasi'])->middleware(['auth', 'verified'])->name('donations.viewDonasi');

Route::get('/admin/keuangan/pemasukan', function () {
    return view('keuangan.pemasukan');
});


Route::get('/admin/donations/approved', [DonationController::class, 'approvedDonationSum'])
    ->middleware(['auth', 'verified'])->name('donations.approvedSum');
Route::get('/admin/total-donasi/bulan', [DonationController::class, 'totalApprovedDonationPerMonth'])
    ->middleware(['auth', 'verified'])->name('donations.totalApprovedDonationPerMonth');

    Route::get('/pemasukan', [PemasukanController::class, 'create'])->middleware(['auth', 'verified'])->name('pemasukan.create');
    Route::post('/pemasukan', [PemasukanController::class, 'store'])->middleware(['auth', 'verified'])->name('pemasukan.store');

    Route::get('/pengeluaran', [PengeluaranController::class, 'create'])->middleware(['auth', 'verified'])->name('pengeluaran.create');
    Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->middleware(['auth', 'verified'])->name('pengeluaran.store');

    Route::get('admin/laporan', [LaporanController::class, 'viewLaporan'])->middleware(['auth', 'verified'])->name('laporan.viewLaporan');

require __DIR__.'/auth.php';
