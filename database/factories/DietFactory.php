<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Diet;
use Faker\Generator as Faker;

$factory->define(Diet::class, function (Faker $faker) {
    return [
        'diet_name' => $faker->name(),
        'start_weight' => $faker->numberBetween(65, 160),
        'desired_weight' => $faker->numberBetween(55, 85),
        'number_of_days' => $faker->numberBetween(80, 300),
        'height' => $faker->numberBetween(150, 200),
        'created_at' => $faker->dateTimeBetween('-1 months')
    ];
});
