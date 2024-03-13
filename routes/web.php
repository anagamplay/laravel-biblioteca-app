<?php

use App\Http\Controllers\LivroCategoriaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', action:[HomeController::class, 'index'])->name('home');

Route::get('/users', action:[UserController::class, 'index'])->name('users.index');
Route::resource('users', UserController::class);
Route::resource('livro_categorias', LivroCategoriaController::class);