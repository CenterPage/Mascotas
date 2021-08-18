<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mascota;
use App\Tipo;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Mascota::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
        'url' => '',
        'fecha_nac' => Carbon::parse('2018-06-16'),
        'sexo' => $faker->sentence(1),
        'raza' => $faker->sentence(1),
        'color' => $faker->sentence(1),
        'caracteristicas' => $faker->sentence(4),
        'foto' => '',
        'solicitud' => '',
        'tipo_id' => Tipo::all()->random()->id,
        'user_id' => User::all()->random()->id,
        // 'solicitude_id' => '',
    ];
});

