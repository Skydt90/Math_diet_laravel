<?php

namespace App\Services;

use App\Contracts\DietServiceContract;
use App\Http\Requests\StoreDiet;
use App\Models\Diet;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;

class DietService implements DietServiceContract
{
    public function createDiet(StoreDiet $request, int $user_id) : Diet
    {
        return Diet::create([
            'diet_name' => $request->name,
            'start_weight' => $request->start_weight,
            'desired_weight' => $request->desired_weight,
            'number_of_days' => $request->number_of_days,
            'height' => $request->height,
            'user_id' => $user_id
        ]);
    }

    public function createDietDates(Diet $diet) : array
    {
        $dates = [];
        $start_date = Carbon::now();
        $interval = CarbonInterval::days(1);
        $end_date = Carbon::now()->addDays($diet->number_of_days);
        $period = CarbonPeriod::create($start_date, $interval, $end_date);
        
        foreach($period as $date) {
            array_push($dates, $date);
        }
        return $dates;
    }

    public function calculateDailyWeightLoss(Diet $diet) : float
    {
        return ($diet->start_weight - $diet->desired_weight) / $diet->number_of_days;
    }
    
}
