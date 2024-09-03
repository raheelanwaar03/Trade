<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\history;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function index()
    {
        $transcations = Withdraw::where('user_id', auth()->user()->id)->get();
        return view('user.dashboard', compact('transcations'));
    }

    public function refer()
    {
        return view('user.refer.copy');
    }

    public function team()
    {
        $team = User::where('referral', auth()->user()->user_id)->get();
        return view('user.refer.team', compact('team'));
    }

    public function rewards()
    {
        $rewards = history::where('user_id', auth()->user()->id)->where('type', 'Daily Profit')->get();
        return view('user.pages.rewards', compact('rewards'));
    }
}
