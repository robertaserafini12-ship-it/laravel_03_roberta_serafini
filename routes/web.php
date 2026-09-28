<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// 1. Homepage
Route::get('/', [ArticleController::class, 'homepage'])->name('homepage');

// 2. Indice articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

// 3. Dettaglio articolo
Route::get('/articolo/{id}', [ArticleController::class, 'show'])->name('articles.show');