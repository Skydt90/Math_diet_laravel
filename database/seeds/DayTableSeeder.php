<?php

use App\Models\Day;
use App\Models\Diet;
use Illuminate\Database\Seeder;

class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fetch diets for foreign key relationships
        $diets = Diet::all();

        if($diets->count() === 0) {
            $this->command->info('There are no diets in the DB yet. Please seed diets table first!');
            return;
        }

        $dayCount = (int) $this->command->ask('How many days should be created?', 1000);

        factory(Day::class, $dayCount)->make()->each(function($day) use ($diets) {
            
            $day->diet_id = $diets->random()->id;
            $day->save();
        });
    }
}
