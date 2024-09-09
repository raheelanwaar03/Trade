<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlans;
use App\Models\user\history;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function soldPlans()
    {
        $soldPlans = BuyPlans::get();
        return view('admin.plan.sold', compact('soldPlans'));
    }

    public function giveReward()
    {
        $soldPlans = BuyPlans::get();

        // give every buyer 0.6% of there investment today and check if he get today reward
        foreach ($soldPlans as $plan) {
            $reward = $plan->amount * $plan->daily_profit / 100;
            // check if user get today reward
            $history = history::where('user_id', $plan->user_id)->where('type', 'Daily Profit')->whereDate('created_at', Carbon::today())->first();
            if (!$history) {
                $user = User::find($plan->user_id);
                $user->balance += $reward;
                $user->save();
                $history = new history();
                $history->user_id = $plan->user_id;
                $history->amount = $reward;
                $history->type = 'Daily Profit';
                $history->save();
            }
        }
        return redirect()->route('Admin.Dashboard')->with('success', 'Reward given to all buyers');
    }

    public function givenReward()
    {
        $rewards = history::get();
        return view('admin.plan.givenReward', compact('rewards'));
    }

    public function allPlans()
    {
        $plans = Plans::get();
        return view('admin.plan.all', compact('plans'));
    }

    public function addPlan()
    {
        return view('admin.plan.add');
    }

    public function storePlan(Request $request)
    {
        // store image in plans
        $image = $request->file('image');
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('plans'), $imageName);
        // store plan

        $plan = new Plans();
        $plan->name = $request->name;
        $plan->min = $request->min;
        $plan->percentage = $request->percentage;
        $plan->daily_profit = $request->daily_profit;
        $plan->image = $imageName;
        $plan->save();
        return back()->with('success', 'Plan added successfully');
    }

    public function editPlan($id)
    {
        $plan = Plans::find($id);
        return view('admin.plan.edit', compact('plan'));
    }

    public function updatePlan(Request $request, $id)
    {
        $plan = Plans::find($id);
        $plan->name = $request->name;
        $plan->min = $request->min;
        $plan->percentage = $request->percentage;
        $plan->daily_profit = $request->daily_profit;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('plans'), $imageName);
            $plan->image = $imageName;
        }
        $plan->save();
        return back()->with('success', 'Plan updated successfully');
    }
}
