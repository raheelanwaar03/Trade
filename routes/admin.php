<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminDepositController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboard::class, 'index'])->name('Dashboard');
    // Deposit
    Route::get('All/Deposit/Request', [AdminDepositController::class, 'all'])->name('All.Deposit.Requests');
});
