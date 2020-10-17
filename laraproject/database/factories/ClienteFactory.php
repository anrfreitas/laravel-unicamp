<?php

use Faker\Generator as Faker;

$factory->define(App\cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name, //fake name
        'telefone' => rand(1, 100000000), //random telephone
        'email' => $faker->email //fake email
    ];
});
