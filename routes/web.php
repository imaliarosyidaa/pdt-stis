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
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [HomeController::class, 'index'])->name('home.index');

// routes/web.php

// Contoh rute untuk menangani formulir testimoni dan feedback
Route::post('/layouts.user.testimoni', [feedbackController::class, 'store'])->name('feedback.store');
Route::get('/layouts.user.testimoni', [feedbackController::class, 'create'])->name('feedback.create');
Route::get('/admin/testimoni', [feedbackController::class, 'view'])->name('feedback.view');
Route::post('/feedback/editview/{id}', [FeedbackController::class, 'editview'])->name('feedback.editview');
//Route::get('/layouts.user.HalamanUtama', [feedbackController::class, 'view'])->name('feedback.home');
Route::get('/layouts.user.HalamanUtama', [HomeController::class, 'index'])->name('home.index');

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

//cek middleware
Route::get('/cek1', function(){
    return '<h1>Cek1</h1>';
})->middleware(['auth', 'verified']);

Route::get('/cek2', [cekController::class, 'index'])->middleware(['auth', 'verified']);

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
Route::resource('volunteers', VolunteerController::class);
Route::get('home/daftar-volunteer', [VolunteerController::class,'daftarVolunteer']);

// Galeri
Route::get('/admin/upload-galeri', [GalleryController::class, 'create']);
Route::post('/admin/upload-galeri', [GalleryController::class, 'store']);
Route::get('/gallery', [PostGalleryController::class, 'index']);

Route::get('/email', [App\Http\Controllers\ContactController::class, 'create']);
Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send.email');

// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('berita/{category:slug}', [BeritaController::class, 'show']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug']);
Route::resource('/dashboard/berita', DashboardBeritaController::class);
Route::get('/dashboard/kategori/checkSlug', [AdminCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/kategori', AdminCategoryController::class)->except('show');

// Events
Route::get('/events/create', [EventPdtController::class, 'create'])->middleware(['auth', 'verified'])->name('events.createKegiatan');
Route::post('/events', [EventPdtController::class, 'store'])->middleware(['auth', 'verified'])->name('events.store');
Route::get('/events', [EventPdtController::class, 'berhasil'])->middleware(['auth', 'verified'])->name('events.berhasil');
Route::delete('/events/{id}', [EventPdtController::class, 'hapusKegiatan'])->middleware(['auth', 'verified'])->name('events.hapusKegiatan');
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->middleware(['auth', 'verified'])->name('events.donasi');
Route::get('/donation', [EventPdtController::class, 'donasi'])->middleware(['auth', 'verified'])->name('events.donation');
Route::get('/events/{event}/edit', [EventPdtController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}/update', [EventPdtController::class, 'update'])->name('events.update');

// Donations
Route::get('/donasi', [EventPdtController::class, 'viewDonasi'])->name('events.donasi'); //dashboard user tidak usah login
//Route::get('/donation', [EventPdtController::class, 'donasi'])->middleware(['auth', 'verified'])->name('events.donation'); //cuma testing
Route::post('/donations', [DonationController::class, 'store'])->middleware(['auth', 'verified'])->name('donations.store');
Route::get('/donations', [DonationController::class, 'berhasilDonasi'])->middleware(['auth', 'verified'])->name('donations.berhasil'); //dasboard user
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

Route::get('/admin/keuangan/pemasukan', [PemasukanController::class, 'create'])->middleware(['auth', 'verified'])->name('pemasukan.create'); //form tambah pemasukan
Route::post('/admin/keuangan/pemasukan', [PemasukanController::class, 'store'])->middleware(['auth', 'verified'])->name('pemasukan.store');

Route::get('/admin/keuangan/admin/keuangan/pemasukan/{id}/edit', [PemasukanController::class, 'edit'])->name('pemasukan.edit');
Route::patch('/admin/keuangan/pemasukan/{id}', [PemasukanController::class, 'update'])->name('pemasukan.update');
Route::delete('/admin/keuangan/pemasukan/{id}', [PemasukanController::class, 'destroy'])->name('pemasukan.destroy');

Route::get('/admin/keuangan/pengeluaran', function () {
    return view('keuangan.pengeluaran');
});

Route::get('/admin/keuangan/pengeluaran', [PengeluaranController::class, 'create'])->middleware(['auth', 'verified'])->name('pengeluaran.create');
Route::post('/admin/keuangan/pengeluaran', [PengeluaranController::class, 'store'])->middleware(['auth', 'verified'])->name('pengeluaran.store');
Route::get('/admin/keuangan/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit'])->name('pengeluaran.edit');
Route::patch('/admin/keuangan/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
Route::delete('/admin/keuangan/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');

Route::get('admin/keuangan', [LaporanController::class, 'viewLaporan'])->middleware(['auth', 'verified'])->name('laporan.viewLaporan');

Route::get('/admin', [LaporanController::class, 'totalDebitByTypeAndMonth'])->name('laporan-keuangan.graph');

require __DIR__ . '/auth.php';
