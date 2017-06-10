<?php
/**
 * Created by PhpStorm.
 * User: jobvink
 * Date: 09-06-17
 * Time: 20:46
 */

use Carbon\Carbon;

$factory->define(App\Consult::class, function (Faker\Generator $faker) {
    return [
        'consultant' => $faker->name,
        'type' => $faker->word,
        'date' => Carbon::now()->addWeeks(rand(-12, 12)),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'patient_id' => App\Patient::inRandomOrder()->get()->first()->id,
        'docter_id' => App\Docter::inRandomOrder()->get()->first()->id,
    ];
});