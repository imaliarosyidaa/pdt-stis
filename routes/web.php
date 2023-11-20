<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostGalleryController;


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

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/admin/upload-galeri', [GalleryController::class, 'create']);
Route::post('/admin/upload-galeri', [GalleryController::class, 'store']);

Route::get('/gallery', [PostGalleryController::class, 'index']);
// Route::resource('/admin/upload-galeri',GalleryController::class)->middleware('guest');