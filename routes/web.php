<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;

Route::get('/', action:[HomeController::class, 'index'])->name('home');

// Route::get('/users', action:[UserController::class, 'index'])->name('users.index');
Route::resource('users', UserController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('livros', LivroController::class);