<?php
/**
 * Created by PhpStorm.
 * User: jobvink
 * Date: 10-06-17
 * Time: 15:31
 */
$factory->define(App\Docter::class, function (Faker\Generator $faker) {
    $functions = ['Docter', 'Arts', 'Chirurg', 'Verpleegkundige'];
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => $faker->password,
        'function' => $functions[rand(0, count($functions)-1)]
    ] ;
});