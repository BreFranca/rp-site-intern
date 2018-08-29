<?php

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
    ];
});
