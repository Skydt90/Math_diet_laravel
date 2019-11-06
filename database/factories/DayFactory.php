<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Day;
use Faker\Generator as Faker;

$factory->define(Day::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('-1 months'),
        'goal_weight' => $faker->numberBetween(60, 120),
        'morning_weight' => $faker->numberBetween(60, 120),
        'allowed_food_intake' => $faker->numberBetween(100, 1000),
        'like' => $faker->boolean(),
        'created_at' => now()
    ];
});
