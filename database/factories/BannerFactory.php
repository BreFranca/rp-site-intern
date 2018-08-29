<?php

$factory->define(App\Banner::class, function (Faker\Generator $faker) {
    return [
        "texto" => $faker->name,
        "slug" => $faker->name,
        "link" => $faker->name,
        "descricao" => $faker->name,
    ];
});
