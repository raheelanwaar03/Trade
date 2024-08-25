<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class AdminDepositController extends Controller
{
    public function all()
    {
        $deposits = Deposit::get();
        return view('admin.deposit.all', compact('deposits'));
    }
}
