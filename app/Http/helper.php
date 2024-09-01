<?php

use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\Withdraw;

function users()
{
    $users = User::all()->count();
    return $users;
}

// getting total withdraw

function total_withdraw()
{
    $withdraw = Withdraw::all()->sum('amount');
    return $withdraw;
}

function total_deposit()
{
    $deposit = Deposit::all()->sum('amount');
    return $deposit;
}

// getting user withdraw and deposit

function user_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->get()->sum('amount');
    return $withdraw;
}

function user_deposit()
{
    $deposit = Deposit::where('user_id', auth()->user()->id)->get()->sum('amount');
    return $deposit;
}