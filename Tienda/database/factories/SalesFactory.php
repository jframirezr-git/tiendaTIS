<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ventas;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(Ventas::class, function (Faker $faker) {
    return [
        'valor_unidad' => $faker->numberBetween($min = 200, $max = 9000),
        'cantidad' => $faker->numberBetween($min = 200, $max = 9000),
        'documento' => $faker->numberBetween($min = 200, $max = 9000),
        'id_articulo' => $faker->numberBetween($min = 200, $max = 9000),
        'id_cliente' => $faker->numberBetween($min = 200, $max = 9000)
    ];
});
