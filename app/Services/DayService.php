<?php

namespace App\Services;

use App\Contracts\DayServiceContract;
use App\Models\Day;
use App\Models\Diet;

class DayService implements DayServiceContract
{
    public function addDaysToDiet(Diet $diet)
    {
        $days = [];

        for($i = 1; $i < count($diet->dates); $i++) {
            $date = [
                'date' => $diet->dates[$i],
                'diet_id' => $diet->id,
                'goal_weight' => $diet->start_weight - $diet->daily_loss * $i,
                'morning_weight' => 0.0,
                'allowed_food_intake' => 0.0,
            ];
            array_push($days, $date);
        }
        Day::insert($days);
    }
}