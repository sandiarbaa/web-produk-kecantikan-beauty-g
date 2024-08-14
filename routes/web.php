<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserApprovalController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);

Route::middleware(['guest'])->group(function () {
  Route::get('/register', [RegisterController::class, 'index'])->name('register');
  Route::post('/register', [RegisterController::class, 'store']);
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'authentication']);
});
Route::middleware(['auth'], CheckAdmin::class)->group(function () {
  //Route::get('/', [ProductController::class, 'index'])->middleware('auth');
  //Route::get('/', [HomeController::class, 'index']);
  Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware(['auth', 'can:approve-users'])->group(function () {
    Route::get('/admin/users', [UserApprovalController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/users/{id}/approve', [UserApprovalController::class, 'approve'])->name('admin.users.approve');
});


Route::middleware(['guest'])->group(function () {
  Route::get('/loginAdmin', [LoginAdminController::class, 'index']);
  Route::post('/loginAdmin', [LoginAdminController::class, 'authenticate']);
});
Route::middleware(['auth', 'checkadmin'])->group(function () {
  Route::post('/logoutAdmin', [LoginAdminController::class, 'logout']);

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::get('/dashboard/daftarProduk', [DashboardController::class, 'daftarProduk']);
  
  // Daftar User
  Route::get('/users', [UserController::class, 'index'])->name('users.index');
  Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
  Route::post('/users/{id}/approve', [UserController::class, 'approve'])->name('users.approve');

  Route::resource('/admin/products', ProductAdminController::class);
});