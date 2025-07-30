<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/why-italia', [PagesController::class, 'whyitalia'])->name('whyitalia');

Route::get('/regular-gypsum-board', [ProductController::class, 'regular'])->name('board.regular');
Route::get('/moisture-gypsum-board', [ProductController::class, 'moisture'])->name('board.moisture');
Route::get('/fire-gypsum-board', [ProductController::class, 'fire'])->name('board.fire');
Route::get('/fire-moisture-gypsum-board', [ProductController::class, 'fmr'])->name('board.fmr');
