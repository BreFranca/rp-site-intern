<?php

$factory->define(App\Categoria::class, function (Faker\Generator $faker) {
    return [
        "categoria" => $faker->name,
        "slug" => $faker->name,
    ];
});
