<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminResidenceController;
use App\Http\Controllers\Admin\UpdatePasswordController;
use App\Http\Controllers\Admin\UpdateProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidenceController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Residences
Route::get('/residences', [ResidenceController::class, 'index'])->name('residences.index');
Route::get('/residences/{residence}', [ResidenceController::class, 'show'])->name('residences.show');

Route::middleware(['guest'])
    ->group(function () {
        // Login
        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');

        // Register
        Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    });

Route::middleware(['auth'])
    ->group(function () {
        // Carts
        Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

        // Profile
        Route::get('/profile', [UpdateProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [UpdateProfileController::class, 'update'])->name('profile.update');

        // Password
        Route::get('/edit-password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::patch('/update-password', [UpdatePasswordController::class, 'update'])->name('password.update');

        Route::prefix('admin')
            ->name('admin.')
            ->group(function () {
                Route::middleware(['is_admin'])
                    ->group(function () {
                        // Dashboard
                        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

                        // Residences
                        Route::resource('/residences', AdminResidenceController::class);
                    });
            });

        // Logout
        Route::post('/logout', LogoutController::class)->name('logout');
    });
