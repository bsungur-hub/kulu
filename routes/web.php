<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/4500-system', function () {
    return view('system.4500-system');
});

Route::get('/system-geneo', function () {
    return view('system.system-geneo');
});


Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
