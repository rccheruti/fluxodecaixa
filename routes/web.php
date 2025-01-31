<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/credit', function () {
    return Inertia::render('Credit');
})->middleware(['auth', 'verified'])->name('Credit');

Route::get('/debit', function () {
    return Inertia::render('Debit');
})->middleware(['auth', 'verified'])->name('Debit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Route::resource('credit', CreditController::class);
//    Route::resource('debit', DebitController::class);
//    Route::resource('balance', BalanceController::class);
});

require __DIR__.'/auth.php';
