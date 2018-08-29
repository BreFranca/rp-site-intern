<?php

$factory->define(App\Atividade::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "texto" => $faker->name,
        "categoria_id" => factory('App\Categoria')->create(),
    ];
});
