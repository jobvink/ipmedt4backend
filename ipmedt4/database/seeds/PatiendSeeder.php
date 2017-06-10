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
        factory(App\Patient::class, 100)->create();
    }
}