<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AuthCandidatController;

Route::get('/', function () {
    return view('welcome');
});

// Routes de l'authentification du candidat
Route::get('login/{role}', [AuthController::class, 'showLoginUserForm'])->name('showLoginUserForm');
Route::post('login/{role}', [AuthController::class, 'login']);

Route::get('candidat-logout', [AuthCandidatController::class, 'logout'])->name('candidat-logout');
Route::get('candidat-register', [AuthCandidatController::class, 'showRegistrationForm'])->name('candidat-register');
Route::post('candidat-register', [AuthCandidatController::class, 'register']);

// Routes pour les fonctionnalités de candidat
Route::get('candidat-formation', [CandidatController::class, 'afficher'])->name('dashboard-candidat-formation');
Route::get('candidat-formation/{id}/detail', [CandidatController::class, 'afficherDetail'])->name('detail-formation');

// Détails candidature
Route::get('/candidatures', [CandidatController::class, 'listeCandidatures'])->name('candidatures.liste');
Route::get('candidatures/{id}/detail', [CandidatController::class, 'afficherDetailCandidature'])->name('detail-candidature');
Route::get('', [CandidatController::class, 'candidatureSoumise'])->name('candidature_soumise');
Route::get('candidater/{id}', [CandidatController::class, 'postuler'])->name('postuler');
Route::post('candidater/{id}/traitement', [CandidatController::class, 'postulerTraitement'])->name('postuler-traitement');

// Routes pour les formations
Route::prefix('formations')->name('formations.')->group(function(){
    Route::get('/show', [FormationController::class, 'index'])->name('show');
    Route::get('/create', [FormationController::class, 'create'])->name('create');
    Route::get('/{id}/details', [FormationController::class, 'details'])->name('details');
    Route::post('/', [FormationController::class, 'store'])->name('store');
    Route::get('/{formation}/edit', [FormationController::class, 'edit'])->name('edit');
    Route::put('/{formation}', [FormationController::class, 'update'])->name('update');
    Route::delete('/{formation}', [FormationController::class, 'destroy'])->name('destroy');
});
