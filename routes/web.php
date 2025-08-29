<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WanasupportController;



// Registration Routes
Route::get('/welcome', [WanasupportController::class, 'ShowRegisterForm'])->name("welcome");
Route::post('/register', [WanasupportController::class, 'register']);

Route::get('/register', [WanasupportController::class, 'ShowRegisterForm'])->name('register');

// Login Routes
Route::get('/login', [WanasupportController::class, 'ShowLoginPage'])->name('login');
Route::post('/signin', [WanasupportController::class, 'login']);
Route::post('/logout', [WanasupportController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::get('/donor/dashboard', [WanasupportController::class, 'ShowDonorDashboard'])->name('donor.dashboard');
Route::get('/student/dashboard', [WanasupportController::class, 'ShowStudentDashboard'])->name('student.dashboard');
Route::get('/admin/dashboard', [WanasupportController::class, 'ShowAdminDashboard'])->name('admin.dashboard');
