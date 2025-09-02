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
Route::get('/resources', [PagesController::class, 'resources'])->name('resources');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/projects', [PagesController::class, 'projects'])->name('projects');


Route::get('/regular-gypsum-board', [ProductController::class, 'regular'])->name('board.regular');
Route::get('/moisture-gypsum-board', [ProductController::class, 'moisture'])->name('board.moisture');
Route::get('/fire-gypsum-board', [ProductController::class, 'fire'])->name('board.fire');
Route::get('/fire-moisture-gypsum-board', [ProductController::class, 'fmr'])->name('board.fmr');


Route::get('/fine-plaster', [ProductController::class, 'fineplaster'])->name('fineplaster');
Route::get('/moulding-plaster', [ProductController::class, 'mouldingplaster'])->name('moulding');
Route::get('/vermiculite-plaster', [ProductController::class, 'vermiculiteplaster'])->name('vermiculite');
Route::get('/perlite-plaster', [ProductController::class, 'perlite'])->name('perlite');
Route::get('/machine-plaster', [ProductController::class, 'machine'])->name('machine');


Route::get('/jointing-compound', [ProductController::class, 'jointing'])->name('jointingcomp');
Route::get('/wall-putty', [ProductController::class, 'putty'])->name('putty');




Route::get('/60cm-ceiling-tiles', [ProductController::class, 'sixtycm'])->name('60ceilingtiles');
Route::get('/100cm-ceiling-tiles', [ProductController::class, 'hcm'])->name('hcm');
Route::get('/grg-panels', [ProductController::class, 'grg'])->name('grg');
Route::get('/cornices', [ProductController::class, 'cornices'])->name('cornices');
