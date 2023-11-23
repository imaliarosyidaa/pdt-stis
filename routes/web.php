<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('berita/{category:slug}', [BeritaController::class, 'show']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug']);

Route::resource('/dashboard/berita', DashboardBeritaController::class);

Route::get('/dashboard/kategori/checkSlug', [AdminCategoryController::class, 'checkSlug']);

Route::resource('/dashboard/kategori', AdminCategoryController::class)->except('show');