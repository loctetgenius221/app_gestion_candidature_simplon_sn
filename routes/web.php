<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCandidatController;
use App\Http\Controllers\PersonnelAuthController;

Route::get('/', function () {
    return view('welcome');
});


// Route de l'authentification du candidat

Route::get('candidat-login', [AuthCandidatController::class, 'showLoginForm'])->name('candidat-login');
Route::post('candidat-login', [AuthCandidatController::class, 'login']);
Route::get('logout', [AuthCandidatController::class, 'logout'])->name('logout');
Route::get('candidat-register', [AuthCandidatController::class, 'showRegistrationForm'])->name('candidat-register');
Route::post('candidat-register', [AuthCandidatController::class, 'register']);

// Route authentification du personnel

Route::get('personnel-login', [PersonnelAuthController::class, 'showLoginForm'])->name('personnel-login');
Route::post('personnel-login', [PersonnelAuthController::class, 'login']);
Route::get('logout', [PersonnelAuthController::class, 'logout'])->name('logout');
Route::get('personnel-register', [PersonnelAuthController::class, 'showRegistrationForm'])->name('personnel-register');
Route::post('personnel-register', [PersonnelAuthController::class, 'register']);
