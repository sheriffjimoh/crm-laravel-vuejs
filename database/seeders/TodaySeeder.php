<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Today;
use Illuminate\Support\Str;

class TodaySeeder extends Seeder
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
	    	Today::create([
	            'title' => $faker->sentence($nbWords = 4, $variableWords = false),
	            'completed' => false,
                'approved' => false,
                'taskID'=> Str::random(10)
	        ]);
    }   }
}
