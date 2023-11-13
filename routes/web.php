<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\DonationController;

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

Route::get('/events/create', [EventPdtController::class, 'create'])->name('events.createKegiatan');
Route::post('/events', [EventPdtController::class, 'store'])->name('events.store');
Route::get('/events', [EventPdtController::class, 'berhasil'])->name('events.berhasil');
Route::delete('/events/{id}', [EventPdtController::class, 'hapusKegiatan'])->name('events.hapusKegiatan');
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->name('events.donasi');
Route::get('/donation',[EventPdtController::class, 'donasi'])->name('events.donation');

Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
Route::get('/donations', [DonationController::class, 'berhasilDonasi'])->name('donations.berhasil');
Route::put('/donations/update-status/{id}', [DonationController::class, 'updateStatus'])
    ->name('donations.updateStatus');
Route::get('admin/donations', [DonationController::class, 'viewDonasi'])->name('donations.viewDonasi');


Route::get('/admin/donations/approved', [DonationController::class, 'approvedDonationSum'])
    ->name('donations.approvedSum');