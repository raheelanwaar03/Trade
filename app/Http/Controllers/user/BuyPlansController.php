<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlans;
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
        // return $request;

        // checking user balance 
        if ($request->amount > auth()->user()->balance) {
            return back()->with('error', 'Your balance is not enough');
        }
        // applying limit that amount should greater than min amount
        $plan = Plans::where('name', $request->plan)->first();
        $plan_name = $plan->name;
        $plan_percentage = $plan->percentage;
        $min_amount = $plan->min;
        $daily_profit = $plan->daily_profit;
        if ($request->amount < $min_amount) {
            return back()->with('error', 'Amount should be greater than minimum amount');
        }
        // deducting amount from user balance
        auth()->user()->update(['balance' => auth()->user()->balance - $request->amount]);

        // checking refer
        $user = User::where('user_id', auth()->user()->referral)->first();
        if ($user !== null) {
            // give user 20% commission on purchasing amount
            $user->balance += ($request->amount * 20) / 100;
            $user->save();
        }

        // storing user plan
        $user_plan = new BuyPlans();
        $user_plan->user_id = auth()->user()->id;
        $user_plan->plan_name = $plan_name;
        $user_plan->amount = $request->amount;
        $user_plan->percentage = $plan_percentage;
        $user_plan->daily_profit = $daily_profit;
        $user_plan->save();
        return redirect()->route('User.Purchased.Plans')->with('success', 'Plan purchased successfully');
    }

    public function purchasedPlan()
    {
        $purchasedPlans = BuyPlans::where('user_id', auth()->user()->id)->get();
        return view('user.plan.purchased', compact('purchasedPlans'));
    }
}
