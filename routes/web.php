<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthCandidatController;
use App\Http\Controllers\DashboardPersonnelController;

// Include all routes for admins as super admins should have those privileges too
require base_path('routes/web_admin.php');
require base_path('routes/web_user.php');

//Routes d'authentification générales
Route::get('/login/{role}', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login/{role}', [AuthController::class, 'login'])->name('login');
Route::post('/logout/{role}', [AuthController::class, 'logout'])->name('logout');
Route::get('/register/{role}', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register/{role}', [AuthController::class, 'register'])->name('register');



