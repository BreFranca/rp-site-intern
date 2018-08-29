<?php

$factory->define(App\Info::class, function (Faker\Generator $faker) {
    return [
        "email_contato" => $faker->name,
        "linked_in" => $faker->name,
        "facebook" => $faker->name,
        "instagram" => $faker->name,
        "vimeo" => $faker->name,
    ];
});
