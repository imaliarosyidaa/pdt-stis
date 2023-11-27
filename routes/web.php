<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostGalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardBeritaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::resource('volunteers', VolunteerController::class);
Route::get('home/daftar-volunteer', [VolunteerController::class,'daftarVolunteer']);

Route::get('/admin/upload-galeri', [GalleryController::class, 'create']);
Route::post('/admin/upload-galeri', [GalleryController::class, 'store']);

Route::get('/gallery', [PostGalleryController::class, 'index']);
// Route::resource('/admin/upload-galeri',GalleryController::class)->middleware('guest');

// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('berita/{category:slug}', [BeritaController::class, 'show']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug']);
Route::resource('/dashboard/berita', DashboardBeritaController::class);
Route::get('/dashboard/kategori/checkSlug', [AdminCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/kategori', AdminCategoryController::class)->except('show');