<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostGalleryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/volunteers', [VolunteerController::class,'index'])->name('daftar volunteer');
Route::get('/admin/volunteers/add', [VolunteerController::class,'add'])->name('add volunteer');
Route::post('/admin/volunteers', [VolunteerController::class,'simpan'])->name('simpan volunteer');

// Route::get('/admin/upload-galeri', [GalleryController::class, 'create']);
// Route::post('/admin/upload-galeri', [GalleryController::class, 'store']);

Route::get('/gallery', [PostGalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/{year}', [PostGalleryController::class, 'filterByYear'])->name('filter.year');
//Route::get('/gallery/filter/{year}', 'PostGalleryController@filterByYear');


Route::get('/email', [App\Http\Controllers\ContactController::class, 'create']);
Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send.email');

Route::resource('/dashboard/galeri', DashboardGalleryController::class);
Route::get('/dashboard/galeri/{{ $gallery->id }}',  [DashboardGalleryController::class, 'show']);

