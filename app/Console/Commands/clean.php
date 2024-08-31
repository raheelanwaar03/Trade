<?php

namespace App\Console\Commands;

use App\Models\admin\Plans;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For Clean App';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = 0.00;
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->user_id = 'SRM12346';
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->balance = 0.00;
        $user->password = Hash::make('asdfasdf');
        $user->referral = 'default';
        $user->referral = 'default';
        $user->status = 'approved';
        $user->role = 'user';
        $user->user_id = 'SRM12345';
        $user->save();

        // adding payment method

        $account = new PaymentMethod();
        $account->user_name = 'Test';
        $account->bank_name = 'Easypaisa';
        $account->account_num = '03121122333';
        $account->save();

        $account = new PaymentMethod();
        $account->user_name = 'Test';
        $account->bank_name = 'Jazzcash';
        $account->account_num = '03121122555';
        $account->save();

        // adding plans
        $plan = new Plans();
        $plan->name = 'Real-State';
        $plan->min = '1500';
        $plan->percentage = '20';
        $plan->daily_profit = '0.6';
        $plan->save();

        $plan = new Plans();
        $plan->name = 'Bitcoin Mining';
        $plan->min = '2500';
        $plan->percentage = '20';
        $plan->daily_profit = '0.6';
        $plan->save();

        $plan = new Plans();
        $plan->name = 'Solar Energy';
        $plan->min = '1000';
        $plan->percentage = '20';
        $plan->daily_profit = '0.6';
        $plan->save();
    }
}
