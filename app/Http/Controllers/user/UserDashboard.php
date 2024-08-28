<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
}
