<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// 1. Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// 2. Indice articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

// 3. Dettaglio articolo
Route::get('/articolo/{id}', [ArticleController::class, 'show'])->name('articles.show');