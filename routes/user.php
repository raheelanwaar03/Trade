<?php

use App\Http\Controllers\user\UserDashboard;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {
    Route::get('/Dashboard', [UserDashboard::class, 'index'])->name('Dashboard');
});
