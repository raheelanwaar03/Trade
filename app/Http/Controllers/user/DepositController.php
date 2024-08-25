<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {
        $account = PaymentMethod::get();
        return view('user.deposit.index', compact('account'));
    }
}
