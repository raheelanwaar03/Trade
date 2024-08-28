<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function index()
    {
        return view('user.dashboard');
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
}
