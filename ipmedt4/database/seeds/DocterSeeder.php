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
        DB::table('docters')->insert([
            [
                'id' => 1,
                'name' => 'Dr. Robbert Winkel',
                'email' => 'docter@test.nl',
                'password' => bcrypt('demo'),
                'function' => 'Dokter',
            ]
        ]);

        factory(App\Docter::class, 100)->create();
    }
}