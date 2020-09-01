<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'documento' => $faker->numberBetween($min = 1, $max = 10000),
        'telefono' => $faker->numberBetween($min = 1, $max = 10000),
    ];
});