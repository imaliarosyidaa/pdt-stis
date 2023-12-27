<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Berita;
use App\Models\Category;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostGalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardBeritaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DashboardGalleryController;

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

// Landing Page
Route::get('', [HomeController::class, 'index'])->name('welcome');

// Contoh rute untuk menangani formulir testimoni dan feedback
Route::post('/layouts.user.testimoni', [feedbackController::class, 'store'])->name('feedback.store');

Route::get('/layouts.user.testimoni', [feedbackController::class, 'create'])->name('feedback.create');

Route::get('/admin/testimoni', [feedbackController::class, 'view'])
    ->name('feedback.view')
    ->middleware(['auth', 'verified', 'role:admin']);

Route::post('/feedback/hapusTestimoni/{id}', [FeedbackController::class, 'hapusTestimoni'])
    ->name('feedback.hapusTestimoni')
    ->middleware(['auth', 'verified', 'role:admin']);

Route::post('/feedback/editview/{id}', [FeedbackController::class, 'editview'])
    ->name('feedback.editview')
    ->middleware(['auth', 'verified', 'role:admin']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route untuk role halaman admin
Route::get('admin', function(){
    return '<h1>Hello Admin</h1>';
})->middleware(['auth', 'verified', 'role:admin']);

//route untuk role halaman umum
Route::get('umum', function(){
    return '<h1>Hello Umum & Mahasiswa Apakah kaluan siap berdonasi?</h1>';
})->middleware(['auth', 'verified', 'role:umum|mahasiswa']);

//route untuk role halaman mahasiswa
Route::get('mahasiswa', function(){
    return '<h1>Hello Mahasiswa</h1>';
})->middleware(['auth', 'verified', 'role:mahasiswa']);

require __DIR__.'/auth.php';

// Volunteers
Route::resource('volunteers', VolunteerController::class)
    ->middleware(['auth', 'verified', 'role:admin']);
Route::post('/daftar-volunteers', [VolunteerController::class,'store'])
    ->name('volunteers.store');
Route::get('/daftar-volunteer', [VolunteerController::class,'daftarVolunteer']);


// Galeri
Route::get('/gallery', [PostGalleryController::class, 'index'])
    ->name('gallery.index');
Route::get('/gallery/{year}', [PostGalleryController::class, 'filterByYear'])
    ->name('filter.year');
Route::resource('/dashboard/galeri', DashboardGalleryController::class);
Route::get('/dashboard/galeri/{{ $gallery->id }}',  [DashboardGalleryController::class, 'show'])->middleware(['auth', 'verified','role:admin']);

// Email
Route::get('/email', [App\Http\Controllers\ContactController::class, 'create']);
Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])
    ->name('send.email');

// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('berita/{category:slug}', [BeritaController::class, 'show']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])
    ->middleware(['auth', 'verified', 'role:admin']);
Route::resource('/dashboard/berita', DashboardBeritaController::class)
    ->middleware(['auth', 'verified', 'role:admin']);
Route::get('/dashboard/kategori/checkSlug', [AdminCategoryController::class, 'checkSlug'])
    ->middleware(['auth', 'verified', 'role:admin']);
Route::resource('/dashboard/kategori', AdminCategoryController::class)
    ->except('show')
    ->middleware(['auth', 'verified', 'role:admin']);

// Events
Route::get('/events', [EventPdtController::class, 'berhasil'])
    ->middleware(['auth', 'verified'])
    ->name('events.berhasil'); //dashboard admin events
Route::get('/events/create', [EventPdtController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('events.createKegiatan'); //form membuat events
Route::post('/events', [EventPdtController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('events.store'); //simpan events
Route::delete('/events/{id}', [EventPdtController::class, 'hapusKegiatan'])
    ->middleware(['auth', 'verified'])
    ->name('events.hapusKegiatan'); // Hapus Events
Route::get('/events/{event}/edit', [EventPdtController::class, 'edit'])
    ->name('events.edit');
Route::put('/events/{event}/update', [EventPdtController::class, 'update'])
    ->name('events.update');

// Donations
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->name('events.donasi'); // Halmaan donasi tidak usah login
//Route::get('/donation', [EventPdtController::class, 'donasi'])->middleware(['auth', 'verified'])->name('events.donation'); //cuma testing
Route::post('/donations', [DonationController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('donations.store');
Route::get('/donations', [DonationController::class, 'berhasilDonasi'])
    ->middleware(['auth', 'verified'])
    ->name('donations.berhasil'); //dasboard user
Route::put('/donations/update-status/{id}', [DonationController::class, 'updateStatus'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('donations.updateStatus');
Route::get('/admin/donations', [DonationController::class, 'viewDonasi'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('donations.viewDonasi'); //dashboard admin

Route::get('/admin/donations/approved', [DonationController::class, 'approvedDonationSum'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('donations.approvedSum');
Route::get('/admin/total-donasi/bulan', [DonationController::class, 'totalApprovedDonationPerMonth'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('donations.totalApprovedDonationPerMonth');


//Keuangan Pemasukan
Route::get('/admin/keuangan/pemasukan', function () {
    return view('keuangan.pemasukan');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/admin/keuangan/pemasukan', [PemasukanController::class, 'create'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('pemasukan.create'); //form tambah pemasukan
Route::post('/admin/keuangan/pemasukan', [PemasukanController::class, 'store'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('pemasukan.store');

Route::get('/admin/keuangan/pemasukan/edit/{id}', [PemasukanController::class, 'edit'])
    ->name('pemasukan.edit')
    ->middleware(['auth', 'verified','role:admin']);
Route::patch('/admin/keuangan/pemasukan/{id}', [PemasukanController::class, 'update'])
    ->name('pemasukan.update')
    ->middleware(['auth', 'verified','role:admin']);
Route::delete('/admin/keuangan/pemasukan/{id}', [PemasukanController::class, 'destroy'])
    ->name('pemasukan.destroy')
    ->middleware(['auth', 'verified','role:admin']);

Route::get('/admin/keuangan/pengeluaran', function () {
    return view('keuangan.pengeluaran');
})->middleware(['auth', 'verified','role:admin']);

// Keuangan Pengeluaran
Route::get('/admin/keuangan/pengeluaran', [PengeluaranController::class, 'create'])->middleware(['auth', 'verified','role:admin'])->name('pengeluaran.create');
Route::post('/admin/keuangan/pengeluaran', [PengeluaranController::class, 'store'])->middleware(['auth', 'verified','role:admin'])->name('pengeluaran.store');
Route::get('/admin/keuangan/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit'])->middleware(['auth', 'verified','role:admin'])->name('pengeluaran.edit');
Route::patch('/admin/keuangan/pengeluaran/{id}', [PengeluaranController::class, 'update'])->middleware(['auth', 'verified','role:admin'])->name('pengeluaran.update');
Route::delete('/admin/keuangan/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->middleware(['auth', 'verified','role:admin'])->name('pengeluaran.destroy');

// Menu Keuangan
Route::get('admin/keuangan', [LaporanController::class, 'viewLaporan'])->middleware(['auth', 'verified','role:admin'])->name('laporan.viewLaporan');

Route::get('/admin', [LaporanController::class, 'totalDebitByTypeAndMonth'])->name('laporan-keuangan.graph');

require __DIR__ . '/auth.php';
