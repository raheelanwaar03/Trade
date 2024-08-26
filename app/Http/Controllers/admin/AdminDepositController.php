<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class AdminDepositController extends Controller
{
    public function pendingDeposit()
    {
        $deposits = Deposit::where('status', 'pending')->get();
        return view('admin.deposit.all', compact('deposits'));
    }

    public function approvedDeposit()
    {
        $deposits = Deposit::where('status', 'approved')->get();
        return view('admin.deposit.approved', compact('deposits'));
    }

    public function rejectedDeposit()
    {
        $deposits = Deposit::where('status', 'rejected')->get();
        return view('admin.deposit.rejected', compact('deposits'));
    }

    public function approveDeposit($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();
        $user = User::find($deposit->user_id);
        $user->balance += $deposit->amount;
        $user->save();
        return redirect(route('Admin.Pending.Deposit.Requests'))->with('success', 'User Deposit request Approved');
    }

    public function rejectDeposit($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'rejected';
        $deposit->save();
        return redirect(route('Admin.Pending.Deposit.Requests'))->with('success', 'User Deposit request Rejected');
    }

    public function editDeposit($id)
    {
        $deposit = Deposit::find($id);
        return view('admin.deposit.edit', compact('deposit'));
    }

    public function updateDeposit(Request $request, $id)
    {
        $deposit = Deposit::find($id);
        $deposit->amount = $request->amount;
        $deposit->save();
        return redirect()->back()->with('success', 'User deposit request approved successfull!');
    }
}
