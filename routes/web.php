<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('blog_details/{id}', [HomeController::class, 'BlogDetails'])->name('blog_details');
Route::get('/admin', [UserController::class, 'AdminSignin'])->name('admin.signin');
Route::post('/login', [UserController::class, 'AdminLogin'])->name('admin.login');

Route::middleware('auth:web')->group(function(){

	Route::get('/dashboard', [UserController::class, 'AdminDashboard'])->name('admin.dashboard');
	Route::get('/logout', [UserController::class, 'AdminLogout'])->name('admin.logout');
});
