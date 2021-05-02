<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Upcoming;
use Illuminate\Support\Str;

class UpcomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 5; $i++) { 
	    	Upcoming::create([
	            'title' => $faker->sentence($nbWords = 4, $variableWords = false),
	            'completed' => false,
                'approved' => false,
                'waiting' => true,
                'taskID'=> Str::random(10)
	        ]);
        }
    }

}
