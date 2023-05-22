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
    Route::post('/store', [ClientController::class, 'store'])->name("clients.store");
    Route::get('{id}/edit', [ClientController::class, 'edit'])->name("clients.edit");
    Route::put('{id}', [ClientController::class, 'update'])->name("clients.update");
    Route::delete('{id}', [ClientController::class, 'destroy'])->name("clients.destroy");
    Route::get('{id}', [ClientController::class, 'show'])->name("clients.show");
});




