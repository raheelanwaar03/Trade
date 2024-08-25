<?php

use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\UserDashboard;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {
    Route::get('/Dashboard', [UserDashboard::class, 'index'])->name('Dashboard');
    // deposit
    Route::get('/Deposit', [DepositController::class, 'deposit'])->name('Deposit');
});
