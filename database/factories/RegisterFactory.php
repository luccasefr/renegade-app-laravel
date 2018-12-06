<?php

use Faker\Generator as Faker;

$factory->define(App\Register::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->email,
        'cpf' => $faker->cpf,
        'phone' => $faker->phoneNumber,
    ];
});

// 'name',
// 'email',
// 'cpf',
// 'phone'