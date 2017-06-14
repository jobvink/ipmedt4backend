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
        DB::table('patients')->insert([
            [
                'id' => 1,
                'name' => 'Jeroen van der Meij',
                'birthday' => Carbon::now()->addYear(-25),
                'address' => 'Zernikedreef 11',
                'email' => 'jeroen@test.nl',
                'password' => bcrypt('ipmedt')
            ]
        ]);


        factory(App\Patient::class, 100)->create();
    }
}