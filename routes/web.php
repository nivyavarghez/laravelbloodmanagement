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


// Blood Bank Routes
// Route::get('/bloodbank/register', [BloodBankController::class, 'showRegister']);
Route::get('/bloodbank', [BloodBankController::class, 'index'])->name('bloodbank.banklist');

// Donor Routes
Route::get('/donor/register', [DonorController::class, 'showRegister'])->name('donor.donorreg');

// // Contact Route
// Route::get('contact', [ContactController::class, 'index']);
// Route::post('contact', [ContactController::class, 'submit']);