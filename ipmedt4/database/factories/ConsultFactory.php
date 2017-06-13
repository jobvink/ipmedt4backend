<?php
/**
 * Created by PhpStorm.
 * User: jobvink
 * Date: 09-06-17
 * Time: 20:46
 */

use Carbon\Carbon;

$factory->define(App\Consult::class, function (Faker\Generator $faker) {
    $types = ['Huisarts', 'Eerstehulp', 'Rontgenfoto', 'Gipsen'];
    return [
        'consultant' => $types[rand(0, count($types)-1)],
        'type' => $faker->word,
        'appointment_id' => \App\Appointment::inRandomOrder()->get()->first()->id,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'patient_id' => App\Patient::inRandomOrder()->get()->first()->id,
        'docter_id' => App\Docter::inRandomOrder()->get()->first()->id,
    ];
});