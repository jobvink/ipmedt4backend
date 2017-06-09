<?php

use Illuminate\Database\Seeder;

class DocterSeeder extends Seeder
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

        $limit = 100;


        for($i=0; $i<$limit; $i++) {
            DB::table('docters')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'function' => $faker->word
            ]);
        }
    }
}