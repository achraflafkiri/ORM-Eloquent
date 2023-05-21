<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('welcome');
});

// Auth
Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.post');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.post');

// Clients
Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name("clients.index");
    Route::get('/new', [ClientController::class, 'create'])->name("clients.create");
    Route::get('/store', [ClientController::class, 'store'])->name("clients.store");
});


