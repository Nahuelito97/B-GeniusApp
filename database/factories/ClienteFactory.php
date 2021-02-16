<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Cliente;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
      'nombre' => $faker->word,
      'apellido' => $faker->word,
      'direccion' => $faker->word,
      'fechanacimiento' => $faker->text,
      'telefono' => $faker->text,
      'correoelectronico' => $faker->email,
    ];
});

