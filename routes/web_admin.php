<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPersonnelController;

Route::get('/dashboard', [DashboardPersonnelController::class, 'dashboard'])->name('dashboard');
    Route::get('/formations', [DashboardPersonnelController::class, 'index'])->name('formations.index');
    Route::get('/formations-personnels/create', [DashboardPersonnelController::class, 'create'])->name('formations.create');
    Route::post('/formations', [DashboardPersonnelController::class, 'store'])->name('formations.store');
    Route::get('/gestionFomation', [DashboardPersonnelController::class, 'gestionFomation'])->name('gestionFomation');
    Route::get('/CreationFomation', [DashboardPersonnelController::class, 'CreationFomation'])->name('CreationFomation');
    Route::post('/CreationFomationTraitement', [DashboardPersonnelController::class, 'CreationFomationTraitement'])->name('CreationFomationTraitement');
    Route::get('/listFomation', [DashboardPersonnelController::class, 'listFomation'])->name('listFomation');
    Route::get('/detailFomation/{formation}', [DashboardPersonnelController::class, 'detailFomation'])->name('detailFomation');
    Route::get('/{formation}/modifier', [DashboardPersonnelController::class, 'modificationFormation'])->name('modificationFormation');
    Route::post('/{formation}/modifier', [DashboardPersonnelController::class, 'modificationFormationTraitement'])->name('modificationFormationTraitement');
