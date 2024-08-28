<?php

namespace App\Http\Controllers;

use App\Models\admin\Plans;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $plans = Plans::get();
        return view('home.welcome', compact('plans'));
    }

    public function plans()
    {
        return view('home.plans');
    }
}
