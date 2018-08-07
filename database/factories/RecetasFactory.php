<?php

use Faker\Generator as Faker;

$factory->define(App\Receta::class, function (Faker $faker) {
   $nombre = $faker->sentence(2, false);

    return [
      'nombre' => $nombre,
      'id_usuario' =>$faker->numberBetween(1,50),
      'descripcion' =>$nombre.$faker->sentence(5,true),
      'tipo' =>$faker->numberBetween(1,5),
      // 'photo' => $photo,
      'apto_celiacos' =>$faker->boolean,

    ];
});
