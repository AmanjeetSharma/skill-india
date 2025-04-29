<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

    Route::post('courses/enroll/{courseId}', [CourseController::class, 'enroll'])->name('courses.enroll');

    Route::get('dashboard', [CourseController::class, 'showEnrolledCourses'])->name('dashboard');
    
    Route::resource('courses', CourseController::class)->except(['index']); 

    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses', [CourseController::class, 'store'])->name('courses.store');
});
