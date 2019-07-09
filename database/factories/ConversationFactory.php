<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    return [
        'ticket_id' => App\Ticket::all()->random()->id,
        
        'mensaje' => $faker->text($maxNbChars = 200),
        'rol' => App\Conversation::REMITENTE
    ];
});
