<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWithdrawController extends Controller
{
    public function index()
    {
        return view('admin.withdraw.index');
    }
}
