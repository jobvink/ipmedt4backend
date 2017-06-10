<?php
/**
 * Created by PhpStorm.
 * User: jobvink
 * Date: 10-06-17
 * Time: 15:34
 */
use Carbon\Carbon;
$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'birthday' => Carbon::now()->addYears(-20)->addWeeks(rand(-400, 400)),
        'address' => $faker->address,
        'email' => $faker->unique()->email,
        'password' => $faker->password
    ];
});
