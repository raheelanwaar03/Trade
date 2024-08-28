<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use Illuminate\Http\Request;

class BuyPlansController extends Controller
{
    public function plans()
    {
        $plans = Plans::get();
        return view('user.plan.all', compact('plans'));
    }

    public function buyPlan(Request $request)
    {
        return $request;
    }
}
