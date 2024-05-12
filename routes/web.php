<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ContactController;

// Authentication Routes
Route::get('login', [LoginRegisterController::class, 'index']);
Route::get('register', [LoginRegisterController::class, 'registration']);
Route::post('post-login', [LoginRegisterController::class, 'postLogin']);
Route::post('post-registration', [LoginRegisterController::class, 'postRegistration']);
Route::get('dashboard', [LoginRegisterController::class, 'dashboard']);
Route::get('logout', [LoginRegisterController::class, 'logout']);

// Blood Bank Routes
Route::get('bloodbank/register', [BloodBankController::class, 'register']);
Route::get('bloodbank', [BloodBankController::class, 'index']);

// Donor Routes
Route::get('donor/register', [DonorController::class, 'register']);
Route::get('donor', [DonorController::class, 'index']);

// Contact Route
// Route::get('contact', [ContactController::class, 'index']);
// Route::post('contact', [ContactController::class, 'submit']);
