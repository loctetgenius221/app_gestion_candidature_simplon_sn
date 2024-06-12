<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCandidatController;

Route::get('/', function () {
    return view('welcome');
});


// Route de l'authentification du candidat

Route::get('candidat-login', [AuthCandidatController::class, 'showLoginForm'])->name('candidat-login');
Route::post('candidat-login', [AuthCandidatController::class, 'login']);
Route::get('logout', [AuthCandidatController::class, 'logout'])->name('logout');
Route::get('candidat-register', [AuthCandidatController::class, 'showRegistrationForm'])->name('candidat-register');
Route::post('candidat-register', [AuthCandidatController::class, 'register']);

