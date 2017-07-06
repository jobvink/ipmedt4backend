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

       DB::table('appointments')->insert([
        [
            'title' => 'Mogelijk gebroken been',
            'date' => '2017-06-07',
            'location' => 'LUMC Leiden',
            'description' => 'Patiënt is van de trap af gevallen en vermoedt dat hij een gebroken been heeft. Hij heeft pijn aan zijn onderbeen
                en de pijn straalt door het hele been naar boven. Grote kans op een botbreuk.',
            'patient_id' => 1,
            'docter_id' => 1,
        ]
        ]);
    }
}