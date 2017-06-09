<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $datum = Carbon::now();

        $limit = 10000;


        for($i=0; $i<$limit; $i++) {
            DB::table('appointments')->insert([
                'title' => $faker->word,
                'date' => $datum->addWeeks(rand(-12, 12)),
                'location' => $faker->address,
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'patient_id' => rand(1,100),
                'docter_id' => rand(1,100),
            ]);
        }
    }
}