<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PatiendSeeder extends Seeder
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
        $datum = Carbon::now()->subYears(20);

        $limit = 100;


        for($i=0; $i<$limit; $i++) {
            DB::table('patients')->insert([
                'name' => $faker->name,
                'birthday' => $datum->addWeeks(rand(-100, 100)),
                'address' => $faker->address,
                'email' => $faker->unique()->email,
                'password' => $faker->password
            ]);
        }
    }
}