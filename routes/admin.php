<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminDepositController;
use App\Http\Controllers\admin\AdminWithdrawController;
use App\Http\Controllers\admin\PlansController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboard::class, 'index'])->name('Dashboard');
    // Deposit
    Route::get('Pending/Deposit/Requests', [AdminDepositController::class, 'pendingDeposit'])->name('Pending.Deposit.Requests');
    Route::get('Approved/Deposit/Requests', [AdminDepositController::class, 'approvedDeposit'])->name('Approved.Deposit.Requests');
    Route::get('Rejcted/Deposit/Requests', [AdminDepositController::class, 'rejectedDeposit'])->name('Rejected.Deposit.Requests');
    Route::get('Make/Deposit/Approved/{id}', [AdminDepositController::class, 'approveDeposit'])->name('Approve.Deposit');
    Route::get('Make/Deposit/Rejected/{id}', [AdminDepositController::class, 'rejectDeposit'])->name('Reject.Deposit');
    Route::get('Edit/Deposit/{id}', [AdminDepositController::class, 'editDeposit'])->name('Edit.Deposit');
    Route::post('Update/Deposit/Amount/{id}', [AdminDepositController::class, 'updateDeposit'])->name('Update.Deposit');
    // withdraw
    Route::get('Pending/Withdraw/Request', [AdminWithdrawController::class, 'index'])->name('Pending.Withdraws');
    Route::get('Make/Withdraw/Approved', [AdminWithdrawController::class, 'approvedWithdraw'])->name('Approved.Withdraw');
    Route::get('Make/Withdraw/Rejected', [AdminWithdrawController::class, 'rejectedWithdraw'])->name('Rejected.Withdraw');
    Route::get('Make/Withdraw/Approve/{id}', [AdminWithdrawController::class, 'approveWithdraw'])->name('Approve.Withdraw');
    Route::get('Make/Withdraw/Reject/{id}', [AdminWithdrawController::class, 'rejectWithdraw'])->name('Reject.Withdraw');
    // plans
    Route::get('All/Sold/Plans', [PlansController::class, 'soldPlans'])->name('All.Sold.Plans');
    Route::get('All/Plans', [PlansController::class, 'allPlans'])->name('All.Plans');
    Route::get('Add/Plan', [PlansController::class, 'addPlan'])->name('Add.Plan');
    Route::get('Give/Plans/Reward', [PlansController::class, 'giveReward'])->name('Give.Plans.Reward');
    Route::get('Given/Reward', [PlansController::class, 'givenReward'])->name('Given.Reward');
});
