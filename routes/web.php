<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommandeController;
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

// Products
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name("products.index");
    Route::get('/new', [ProductController::class, 'create'])->name("products.create");
    Route::post('/store', [ProductController::class, 'store'])->name("products.store");
    Route::get('{id}/edit', [ProductController::class, 'edit'])->name("products.edit");
    Route::put('{id}', [ProductController::class, 'update'])->name("products.update");
    Route::delete('{id}', [ProductController::class, 'destroy'])->name("products.destroy");
    Route::get('{id}', [ProductController::class, 'show'])->name("products.show");
});

// Commandes
Route::prefix('commandes')->group(function () {
    Route::get('/', [CommandeController::class, 'index'])->name("commandes.index");
    Route::get('/new', [CommandeController::class, 'create'])->name("commandes.create");
    Route::post('/store', [CommandeController::class, 'store'])->name("commandes.store");
    Route::get('{id}/edit', [CommandeController::class, 'edit'])->name("commandes.edit");
    Route::put('{id}', [CommandeController::class, 'update'])->name("commandes.update");
    Route::delete('{id}', [CommandeController::class, 'destroy'])->name("commandes.destroy");
    Route::get('{id}', [CommandeController::class, 'show'])->name("commandes.show");
});




