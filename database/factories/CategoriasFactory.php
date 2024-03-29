<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorias;
use Faker\Generator as Faker;

$factory->define(Categorias::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'description' => $faker->sentence(10),
    ];
});
