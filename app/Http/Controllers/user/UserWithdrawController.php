<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class UserWithdrawController extends Controller
{
    public function withdrawIndex()
    {
        return view('user.withdraw.index');
    }

    public function storeWithdraw(Request $request)
    {
        // validate
        $request->validate([
            'amount' => 'required|numeric|gt:0',
            'title' => 'required|string',
            'number' => 'required|string',
            'bank' => 'required|string',
        ]);

        $withdraw = new Withdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->amount = $request->amount;
        $withdraw->title = $request->title;
        $withdraw->number = $request->number;
        $withdraw->bank = $request->bank;
        $withdraw->save();
        return redirect()->back()->with('success', 'Withdraw request applied successfully');
    }
}
