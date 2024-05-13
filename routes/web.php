<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\LoginRegisterController;


Route::get('login', [LoginRegisterController::class, 'index'])->name('login');
Route::post('post-login', [LoginRegisterController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [LoginRegisterController::class, 'registration'])->name('register');
Route::post('post-registration', [LoginRegisterController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [LoginRegisterController::class, 'dashboard']); 
Route::get('logout', [LoginRegisterController::class, 'logout'])->name('logout');

// Route::get('bloodbankreg',[BloodBankController::class, 'bloodbankindex']);

// // Authentication Routes
// Route::get('login', [LoginRegisterController::class, 'index']);
// Route::get('register', [LoginRegisterController::class, 'registration']);
// Route::post('post-login', [LoginRegisterController::class, 'postLogin']);
// Route::post('post-registration', [LoginRegisterController::class, 'postRegistration']);
// Route::get('dashboard', [LoginRegisterController::class, 'dashboard']);
// Route::get('logout', [LoginRegisterController::class, 'logout']);

// Blood Bank Routes
Route::get('/bloodbank/register', [BloodBankController::class, 'showRegister']);
Route::get('bloodbank', [BloodBankController::class, 'index']);

// Donor Routes
Route::get('donor/register', [DonorController::class, 'register']);
Route::get('donor', [DonorController::class, 'index']);

// // Contact Route
// Route::get('contact', [ContactController::class, 'index']);
// Route::post('contact', [ContactController::class, 'submit']);