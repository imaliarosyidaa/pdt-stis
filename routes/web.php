<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPdtController;

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