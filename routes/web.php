<?php

use App\Http\Controllers\ParcelController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [ParcelController::class, 'home_index'])->name('welcome');

// Page d'enregistrement d'un colis
Route::get('/register', [ParcelController::class, 'register_index'])->name('register');
Route::post('/register', [ParcelController::class, 'register_new_parcel'])->name('register.post');

// Page de suivi d'un colis
Route::get('/tracking', [ParcelController::class, 'tracking_index'])->name('tracking');
Route::post('/tracking', [ParcelController::class, 'tracking_search'])->name('tracking.post');

// Page d'accueil alternative (inutile si elle ne fait rien)
Route::get('/home', function () {
    return view('home');
})->name('home');