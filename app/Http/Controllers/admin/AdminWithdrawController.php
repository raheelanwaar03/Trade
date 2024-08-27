<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class AdminWithdrawController extends Controller
{
    public function index()
    {
        $withdraws = Withdraw::where('status', 'pending')->get();
        return view('admin.withdraw.index', compact('withdraws'));
    }

    public function approvedWithdraw()
    {
        $withdraws = Withdraw::where('status', 'approved')->get();
        return view('admin.withdraw.approved', compact('withdraws'));
    }

    public function rejectedWithdraw()
    {
        $withdraws = Withdraw::where('status', 'rejected')->get();
        return view('admin.withdraw.rejected', compact('withdraws'));
    }

    public function approveWithdraw($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'approved';
        $withdraw->save();
        // dedect balance from user account
        $user = User::where('id', $withdraw->user_id)->first();
        $user->balance -= $withdraw->amount;
        $user->save();
        return redirect()->back()->with('success', 'Withdrawal approved successfully');
    }

    public function rejectWithdraw($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();
        return redirect()->back()->with('success', 'Withdrawal rejected successfully');
    }
}
