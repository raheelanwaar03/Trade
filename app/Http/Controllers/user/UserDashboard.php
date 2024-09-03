<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\history;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword()
    {
        return view('user.pages.password');
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success', 'Password Changed');
    }
}
