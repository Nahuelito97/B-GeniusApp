<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prestamo;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [

        'cliente_id' => $faker->numberBetween(1, 50),
        'libro_id' => $faker->numberBetween(1, 20),
        'fecha_entrega' => $faker->date,
        'fecha_devolucion' => $faker->date,
        'condicion' => $faker->randomDigitNot(0)
    ];
});

