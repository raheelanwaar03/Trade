<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\BuyPlans;
use App\Models\user\history;
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
            $reward = $plan->amount * 0.006;
            // check if user get today reward
            $history = history::where('user_id', $plan->user_id)->where('type', 'Daily Profit')->whereDate('created_at', today())->first();
            if (!$history) {
                $user = User::find($plan->user_id);
                $user->balance += $reward;
                $user->save();
                history::create([
                    'user_id' => $plan->user_id,
                    'type' => 'Daily Profit',
                    'amount' => $reward,
                    'date' => now(),
                ]);
            }
        }
        return redirect()->route('Admin.Dashboard')->with('success', 'Reward given to all buyers');
    }

    public function givenReward()
    {
        $rewards = history::get();
        return view('admin.plan.givenReward', compact('rewards'));
    }
}
