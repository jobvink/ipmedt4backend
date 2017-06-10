<?php
/**
 * Created by PhpStorm.
 * User: jobvink
 * Date: 09-06-17
 * Time: 20:35
 */
use Carbon\Carbon;

$factory->define(App\Appointment::class, function (Faker\Generator $faker) {
    return [
       'title' => $faker->word,
       'date' => Carbon::now()->addWeeks(rand(-12, 12)),
       'location' => $faker->address,
       'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
       'patient_id' => App\Patient::inRandomOrder()->get()->first()->id,
       'docter_id' => App\Docter::inRandomOrder()->get()->first()->id,
   ] ;
});

