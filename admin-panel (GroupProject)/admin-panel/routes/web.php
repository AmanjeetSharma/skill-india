<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;


Route::get('/', [AuthController::class, 'isLoggedIn']);

// Login routes
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/dashboard', [CourseController::class, 'index'])->name('dashboard')->middleware('auth');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('courses', CourseController::class);
