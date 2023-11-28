<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KeuanganController;

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
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');
});
Route::get('/events/create', [EventPdtController::class, 'create'])->middleware(['auth', 'verified'])->name('events.createKegiatan');
Route::post('/events', [EventPdtController::class, 'store'])->middleware(['auth', 'verified'])->name('events.store');
Route::get('/events', [EventPdtController::class, 'berhasil'])->middleware(['auth', 'verified'])->name('events.berhasil');
Route::delete('/events/{id}', [EventPdtController::class, 'hapusKegiatan'])->middleware(['auth', 'verified'])->name('events.hapusKegiatan');
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->middleware(['auth', 'verified'])->name('events.donasi');
Route::get('/donation', [EventPdtController::class, 'donasi'])->middleware(['auth', 'verified'])->name('events.donation');

Route::post('/donations', [DonationController::class, 'store'])->middleware(['auth', 'verified'])->name('donations.store');
Route::get('/donations', [DonationController::class, 'berhasilDonasi'])->middleware(['auth', 'verified'])->name('donations.berhasil');
Route::put('/donations/update-status/{id}', [DonationController::class, 'updateStatus'])
    ->middleware(['auth', 'verified'])->name('donations.updateStatus');
Route::get('admin/donations', [DonationController::class, 'viewDonasi'])->middleware(['auth', 'verified'])->name('donations.viewDonasi');

Route::get('/admin/donations/approved', [DonationController::class, 'approvedDonationSum'])
    ->middleware(['auth', 'verified'])->name('donations.approvedSum');
Route::get('/admin/total-donasi/bulan', [DonationController::class, 'totalApprovedDonationPerMonth'])
    ->middleware(['auth', 'verified'])->name('donations.totalApprovedDonationPerMonth');

Route::get('/admin/keuangan/pemasukan', function () {
    return view('keuangan.pemasukan');
});
Route::get('/pemasukan', [PemasukanController::class, 'create'])->middleware(['auth', 'verified'])->name('pemasukan.create');
Route::post('/pemasukan', [PemasukanController::class, 'store'])->middleware(['auth', 'verified'])->name('pemasukan.store');

Route::get('/admin/keuangan/pengeluaran', function () {
    return view('keuangan.pengeluaran');
});
Route::get('/pengeluaran', [PengeluaranController::class, 'create'])->middleware(['auth', 'verified'])->name('pengeluaran.create');
Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->middleware(['auth', 'verified'])->name('pengeluaran.store');

Route::get('/admin/keuangan/laporan', [LaporanController::class, 'viewLaporan'])->middleware(['auth', 'verified'])->name('laporan.viewLaporan');

<<<<<<< HEAD
// Route::get('/admin/keuangan/pemasukan/{id}/edit', [KeuanganController::class, 'editPemasukan'])->name('keuangan.editPemasukan');
// Route::get('/admin/keuangan/pengeluaran/{id}/edit', [KeuanganController::class, 'editPengeluaran'])->name('keuangan.editPengeluaran');
=======
    Route::get('/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit'])->name('pengeluaran.edit');
    Route::patch('/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
    Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');

    Route::get('/pemasukan/{id}/edit', [PemasukanController::class, 'edit'])->name('pemasukan.edit');
    Route::patch('/pemasukan/{id}', [PemasukanController::class, 'update'])->name('pemasukan.update');
    Route::delete('/pemasukan/{id}', [PemasukanController::class, 'destroy'])->name('pemasukan.destroy');

    Route::get('/admin', [LaporanController::class, 'totalDebitByTypeAndMonth'])
    ->name('laporan-keuangan.graph');

>>>>>>> 481a2574405575cd475cfab16e0873ff80362410

Route::delete('/admin/keuangan/laporan/{id}', [KeuanganController::class, 'destroy'])->name('keuangan.destroy');

require __DIR__ . '/auth.php';
