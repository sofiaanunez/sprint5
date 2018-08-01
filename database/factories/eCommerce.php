<?php

use Faker\Generator as Faker;

$factory->define(App\Servicio::class, function (Faker $faker) {
    return [
      'rubro' => $faker->word,
      'id_usuario' => $faker->number,
      'descripcion' => $faker->paragraph(20),
      'monto' => $faker->number,
      'duracion' => $faker->word,
    ];
});

  $servicio = factory(App\Servicio::class)->make();
  $servicio->save();

factory(App\Servicio::class)->create();
factory(App\Servicio::class)->times(100)->create();
