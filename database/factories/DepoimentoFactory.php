<?php

$factory->define(App\Depoimento::class, function (Faker\Generator $faker) {
    return [
        "cliente" => $faker->name,
        "empresa" => $faker->name,
        "depoimento" => $faker->name,
    ];
});
