<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Libro;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'autor' => $faker->word,
        'cod_libro' => $faker->numberBetween($min = 1000, $max = 9000),
        'año' => $faker->date,
        'edicion' => $faker->word,
        'editorial' => $faker->word,
        'cantidad' => $faker->randomDigit,
        'categoria_id' => $faker->numberBetween(1, 20),
        'estado_id' => $faker->numberBetween(1,5),
        'pais'  => $faker->country,
        'price' => $faker->randomFloat(2, 5, 150),
    ];
});
