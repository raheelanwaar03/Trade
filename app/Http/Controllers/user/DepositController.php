<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\user\Deposit;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {
        $account = PaymentMethod::get();
        return view('user.deposit.index', compact('account'));
    }

    public function request(Request $request)
    {
        // validate
        $request->validate([
            'amount' => 'required|numeric',
            'account_num' => 'required|numeric',
            'title' => 'required',
            'tid' => 'required|numeric',
            'img' => 'required',
        ]);
        // checking the len of account
        $account_len = $request->account_num;
        $accountLength = strlen($account_len);
        if ($accountLength <= 10) {
            return redirect()->back()->with('error', 'Enter minimum 11 digits account number');
        }
        // checking the len of tid
        $tid_len = $request->tid;
        $tidLength = strlen($tid_len);
        if ($tidLength <= 10) {
            return redirect()->back()->with('error', 'Enter 11 digits Tid');
        }

        // save img in public folder
        $img = $request->img;
        $img_name = rand(1111111, 999999) . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('deposit'), $img_name);

        $deposit = new Deposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->amount = $request->amount;
        $deposit->account_num = $request->account_num;
        $deposit->title = $request->title;
        $deposit->tid = $request->tid;
        $deposit->img = $img_name;
        $deposit->status = 'pending';
        $deposit->save();

        return redirect()->route('User.Dashboard')->with('success', 'Submitted successfully! Wait for Admin Approval');
    }

    public function depositReport()
    {
        $transcations = Deposit::where('user_id', auth()->user()->id)->get();
        return view('user.deposit.all', compact('transcations'));
    }
}
