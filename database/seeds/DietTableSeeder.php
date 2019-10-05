<?php

use App\Models\Diet;
use App\Models\User;
use Illuminate\Database\Seeder;

class DietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fetch users for foreign key relationships
        $users = User::all();

        if($users->count() === 0) {
            $this->command->info('There are no users in the DB yet. Please seed users table first!');
            return;
        }

        $dietCount = (int)$this->command->ask('How many diets should be created?', 100);

        factory(Diet::class, $dietCount)->make()->each(function($diet) use ($users) {
            
            $diet->user_id = $users->random()->id;
            $diet->save();
        });
    }
}
