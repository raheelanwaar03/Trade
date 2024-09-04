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
        $plans = Plans::get();
        return view('home.plans', compact('plans'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function back(Request $request)
    {
        return redirect()->back()->with('success', 'We will response you back as soon as possible');
    }
}
