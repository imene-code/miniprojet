<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// Route pour afficher le formulaire de connexion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route pour se déconnecter
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes pour récupérer les emails des utilisateurs
Route::get('/etudiant/{id}/email', [AuthController::class, 'getEtudiantEmail'])->name('etudiant.email');
Route::get('/enseignant/{id}/email', [AuthController::class, 'getEnseignantEmail'])->name('enseignant.email');
Route::get('/responsable/{id}/email', [AuthController::class, 'getResponsableEmail'])->name('responsable.email');
// Routes communes pour tous les utilisateurs authentifiés

// Routes communes pour tous les utilisateurs authentifiés
Route::middleware(['auth'])->group(function () {
    // Route de déconnexion
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Routes pour les utilisateurs non authentifiés
Route::middleware(['guest'])->group(function () {
    // Route de connexion
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Routes spécifiques aux étudiants
Route::middleware(['auth:etudiant'])->group(function () {
    // Tableau de bord des étudiants
    Route::get('/etudiant/dashboard', [EtudiantController::class, 'dashboard'])->name('etudiant.dashboard');
    // Autres routes spécifiques aux étudiants
});
Route::get('/etudiant/notes', [EtudiantController::class, 'showNotes'])->name('etudiant.notes');


// Routes spécifiques aux enseignants
Route::middleware(['auth:enseignant'])->group(function () {
    // Tableau de bord des enseignants
    Route::get('/enseignant/dashboard', [EnseignantController::class, 'dashboard'])->name('enseignant.dashboard');
    // Autres routes spécifiques aux enseignants
});

// Routes spécifiques aux responsables
Route::middleware(['auth:responsable'])->group(function () {
    // Tableau de bord des responsables
    Route::get('/responsable/dashboard', [ResponsableController::class, 'dashboard'])->name('responsable.dashboard');
    // Autres routes spécifiques aux responsables
});
