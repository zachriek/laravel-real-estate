<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])
    ->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');
        Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    });

Route::middleware(['auth'])
    ->group(function () {
        Route::post('/logout', LogoutController::class)->name('logout');
    });
