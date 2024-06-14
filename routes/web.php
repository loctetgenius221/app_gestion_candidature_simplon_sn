<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\AuthCandidatController;
use App\Http\Controllers\PersonnelAuthController;
use App\Http\Controllers\DashboardPersonnelController;

Route::get('/', function () {
    return view('welcome');
});

// Routes de l'authentification du candidat
Route::get('candidat-login', [AuthCandidatController::class, 'showLoginForm'])->name('candidat-login');
Route::post('candidat-login', [AuthCandidatController::class, 'login']);
Route::get('candidat-logout', [AuthCandidatController::class, 'logout'])->name('candidat-logout');
Route::get('candidat-register', [AuthCandidatController::class, 'showRegistrationForm'])->name('candidat-register');
Route::post('candidat-register', [AuthCandidatController::class, 'register']);

// Routes pour les fonctionnalités de candidat

Route::get('candidat-formation', [CandidatController::class, 'afficher'])->name('dashboard-candidat-formation');
Route::get('candidat-formation/{id}/detail', [CandidatController::class, 'afficherDetail'])->name('detail-formation');

Route::post('candidater/{id}', [CandidatController::class, 'postuler'])->name('postuler');
Route::post('candidater/{id}/traitement', [CandidatController::class, 'postulerTraitement'])->name('postuler-traitement');

Route::get('candidature/{id}/detail', [CandidatController::class, 'candidatureDetail'])->name('candidature-detail');


// Routes d'authentification du personnel
Route::get('personnel-login', [PersonnelAuthController::class, 'showLoginForm'])->name('personnel-login');
Route::post('personnel-login', [PersonnelAuthController::class, 'login']);
Route::get('personnel-logout', [PersonnelAuthController::class, 'logout'])->name('personnel-logout');
Route::get('personnel-register', [PersonnelAuthController::class, 'showRegistrationForm'])->name('personnel-register');
Route::post('personnel-register', [PersonnelAuthController::class, 'register']);

// Routes pour les formations
Route::prefix('formations')->name('formations.')->group(function(){
    Route::get('/show', [FormationController::class, 'index'])->name('show');
    ROute::get('/create', [FormationController::class, 'create'])->name('create');
    Route::get('formation/{}id/details', [FormationController::class, 'details'])->name('details');
    Route::get('/create', [FormationController::class, 'create'])->name('create');
    Route::post('/', [FormationController::class, 'store'])->name('store');
    Route::get('/{formation}/edit', [FormationController::class, 'edit'])->name('edit');
    Route::put('/{formation}', [FormationController::class, 'update'])->name('update');
    Route::delete('/{formation}', [FormationController::class, 'destroy'])->name('destroy');
});

// Route pour le tableau de bord

    Route::get('/dashboard', [DashboardPersonnelController::class, 'dashboard'])->name('dashboard');



// Route pour le dashboard candidat

Route::get('/candidat/dashboard', [CandidatController::class, 'index'])->name('candidat-dashboard');
