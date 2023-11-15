<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;
use App\Http\Controllers\VolunteerController;

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

Route::get('/admin/volunteers', [VolunteerController::class,'index'])->name('daftar volunteer');
Route::get('/admin/volunteers/add', [VolunteerController::class,'add'])->name('add volunteer');
Route::post('/admin/volunteers', [VolunteerController::class,'simpan'])->name('simpan volunteer');