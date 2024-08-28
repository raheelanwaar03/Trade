<?php

use App\Http\Controllers\user\BuyPlansController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\UserDashboard;
use App\Http\Controllers\user\UserWithdrawController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {
    Route::get('/Dashboard', [UserDashboard::class, 'index'])->name('Dashboard');
    // deposit
    Route::get('/Deposit', [DepositController::class, 'deposit'])->name('Deposit');
    Route::post('/Deposit/Request', [DepositController::class, 'request'])->name('Deposit.Request');
    // Withdraw
    Route::get('Withdraw/Page', [UserWithdrawController::class, 'withdrawIndex'])->name('Apply.Withdraw');
    Route::post('Store/Withdraw/Request', [UserWithdrawController::class, 'storeWithdraw'])->name('Store.Withdraw');
    // plans
    Route::get('Buy/Plans', [BuyPlansController::class, 'plans'])->name('Buy.Plans');
});
