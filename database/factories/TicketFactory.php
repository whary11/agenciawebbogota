<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'remitente' => $faker->name(),
        'telefono' => $faker->phoneNumber,
        'email' => $faker->email,
        'compania' => $faker->company,
        'num_ticket' => $faker->numberBetween($min=1, $max=8726345273)
    ];
});
