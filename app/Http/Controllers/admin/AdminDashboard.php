<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.dashboard', compact('users'));
    }
}
