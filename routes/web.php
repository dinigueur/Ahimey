<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhimeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserAuthController;

// Ahimey Pages

Route::get('/', [AhimeController::class, 'index'])->name('index');
Route::get('/products/details/{product}', [AhimeController::class, 'details'])->name('details');
Route::post('/pages/search', [SearchController::class, 'index'])->name('search');
Route::get('/pages/shop/create', [AhimeController::class, 'create'])->name('shop.create');
Route::get('/pages/shop/visit/{shop}', [AhimeController::class, 'visit'])->name('shop.visit');

// Authentification

Route::get('/user/register', [UserAuthController::class, 'create'])->name('register');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('register');
Route::get('/user/login', [UserAuthController::class, 'create2'])->name('login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('login');
