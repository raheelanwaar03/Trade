<?php

use App\Http\Controllers\user\UserDashboard;
use Illuminate\Support\Facades\Route;


Route::get('User/Dashboard', [UserDashboard::class, 'index'])->name('User.Dashboard');
