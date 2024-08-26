<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminDepositController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboard::class, 'index'])->name('Dashboard');
    // Deposit
    Route::get('All/Deposit/Request', [AdminDepositController::class, 'all'])->name('All.Deposit.Requests');
    Route::get('Make/Deposit/Approved/{id}', [AdminDepositController::class, 'approveDeposit'])->name('Approve.Deposit');
    Route::get('Make/Deposit/Rejected/{id}', [AdminDepositController::class, 'rejectDeposit'])->name('Reject.Deposit');
    Route::get('Edit/Deposit/{id}', [AdminDepositController::class, 'editDeposit'])->name('Edit.Deposit');
    Route::post('Update/Deposit/Amount/{id}', [AdminDepositController::class, 'updateDeposit'])->name('Update.Deposit');
});
