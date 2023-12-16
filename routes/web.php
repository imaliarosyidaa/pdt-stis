<?php

use App\Http\Controllers\feedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

use App\Http\Controllers\TestimoniFeedbackController;

// Contoh rute untuk menangani formulir testimoni dan feedback

Route::post('/layouts.user.testimoni', [feedbackController::class, 'store'])->name('feedback.store');

Route::get('/layouts.user.testimoni', [feedbackController::class, 'create'])->name('feedback.create');

Route::get('/admin/testimoni', [feedbackController::class, 'view'])->name('feedback.view');

Route::post('/feedback/hapusTestimoni/{id}', [FeedbackController::class, 'hapusTestimoni'])->name('feedback.hapusTestimoni');

Route::post('/feedback/editview/{id}', [FeedbackController::class, 'editview'])->name('feedback.editview');

Route::get('/layouts.user.HalamanUtama', [feedbackController::class, 'view'])->name('feedback.home');

Route::get('/layouts.user.HalamanUtama', [HomeController::class, 'index'])->name('home.index');
