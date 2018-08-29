<?php

$factory->define(App\Video::class, function (Faker\Generator $faker) {
    return [
        "titulo" => $faker->name,
        "texto" => $faker->name,
        "url" => $faker->name,
    ];
});
