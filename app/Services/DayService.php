<?php

namespace App\Services;

use App\Contracts\DayServiceContract;
use App\Models\Day;
use App\Models\Diet;

class DayService implements DayServiceContract
{
    public function createDays(Diet $diet, array $dates, float $daily_weight_loss)
    {

        for( $i = 1; $i < count($dates); $i++) {
         
            Day::create([
                'date' => $dates[$i],
                'diet_id' => $diet->id,
                'goal_weight' => $diet->start_weight - $daily_weight_loss * $i, //daily weight loss
                'morning_weight' => 0.0,
                'allowed_food_intake' => 0.0,
                'like' => false
            ]);
        }     
    }
}