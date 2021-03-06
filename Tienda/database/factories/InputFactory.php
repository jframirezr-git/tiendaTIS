<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Input;
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

$factory->define(Input::class, function (Faker $faker) {
    return [
        'value' => $faker->numberBetween($min = 1, $max = 10000),
        'bill' => $faker->numberBetween($min = 1, $max = 10000),
        'quantity' => $faker->numberBetween($min = 1, $max = 10000),
    ];
});