<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminResidenceController;
use App\Http\Controllers\Admin\AdminTransactionController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/residences', [ResidenceController::class, 'index'])->name('residences.index');
Route::get('/residences/{residence}', [ResidenceController::class, 'show'])->name('residences.show');

Route::group(['middleware' => 'guest'], function () {
  Route::get('/login', [LoginController::class, 'index'])->name('login.index');
  Route::post('/login', [LoginController::class, 'store'])->name('login.store');
  Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
  Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::group(['middleware' => 'auth'], function () {
  Route::post('/logout', LogoutController::class)->name('logout');

  Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
  Route::post('/carts/{residence}/{transaction_status}', [CartController::class, 'store'])->name('carts.store');
  Route::patch('/carts/{residence}', [CartController::class, 'update'])->name('carts.update');
  Route::delete('/carts/{residence}', [CartController::class, 'destroy'])->name('carts.destroy');

  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/profile', [UpdateProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UpdateProfileController::class, 'update'])->name('profile.update');

    Route::get('/edit-password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::patch('/update-password', [UpdatePasswordController::class, 'update'])->name('password.update');

    Route::get('/transactions', [AdminTransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/{transaction}', [AdminTransactionController::class, 'show'])->name('transactions.show');

    Route::middleware('is_admin')->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

      Route::resource('/residences', AdminResidenceController::class);

      Route::get('/transactions/{transaction}/edit', [AdminTransactionController::class, 'edit'])->name('transactions.edit');
      Route::patch('/transactions/{transaction}/update', [AdminTransactionController::class, 'update'])->name('transactions.update');
      Route::delete('/transactions/{transaction}', [AdminTransactionController::class, 'destroy'])->name('transactions.destroy');
    });
  });
});
