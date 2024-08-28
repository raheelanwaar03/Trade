<?php

use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\Withdraw;

function users()
{
    $users = User::all()->count();
    return $users;
}

// getting user withdraw

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