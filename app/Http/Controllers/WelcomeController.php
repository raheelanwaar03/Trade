<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('home.welcome');
    }

    public function plans()
    {
        return view('home.plans');
    }

}
