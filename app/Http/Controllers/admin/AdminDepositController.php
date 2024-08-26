<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class AdminDepositController extends Controller
{
    public function all()
    {
        $deposits = Deposit::get();
        return view('admin.deposit.all', compact('deposits'));
    }

    public function approveDeposit($id)
    {
        return $id;
    }

    public function rejectDeposit($id)
    {
        return $id;
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
        return redirect()->route('Admin.All.Deposit.Requests')->with('success', 'User deposit request approved successfull!');
    }
}
