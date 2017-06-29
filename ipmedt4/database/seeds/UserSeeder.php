<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'patient',
                'email' => 'patient@test.nl',
                'password' => bcrypt('test'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'docter',
                'email' => 'docter@test.nl',
                'password' => bcrypt('test'),
                'remember_token' => str_random(10),
            ]
        ]);
    }
}
