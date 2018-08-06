<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
   $nombre = $faker->sentence(2, false);

    return [
      'nombre' => $nombre,
      'id_usuario' =>$faker->numberBetween(1,3),
      'description' =>$nombre.$faker->sentence(10,true),
      'tipo' =>$faker->numberBetween(1,5),
      // 'photo' => $photo,
      'apto_celiacos' =>$faker->boolean,

    ];
});