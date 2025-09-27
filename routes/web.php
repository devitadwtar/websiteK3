<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\K3Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CSRController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/k3', [K3Controller::class, 'index'])->name('k3');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    })->name('dashboard');
    
    // Nanti kita tambahkan routes protected lainnya di sini
});