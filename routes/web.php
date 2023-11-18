<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
