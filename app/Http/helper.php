<?php

use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\history;
use App\Models\user\Withdraw;
use Carbon\Carbon;

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
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get()->sum('amount');
    return $withdraw;
}

function user_deposit()
{
    $deposit = Deposit::where('user_id', auth()->user()->id)->where('status', 'approved')->get()->sum('amount');
    return $deposit;
}

// checking user daily profit

function daily_profit()
{
    $rewards = history::where('user_id', auth()->user()->id)->where('type', 'Daily Profit')->whereDate('created_at', Carbon::today())->get();
    $total_profit = $rewards->sum('amount');
    return $total_profit;
}
