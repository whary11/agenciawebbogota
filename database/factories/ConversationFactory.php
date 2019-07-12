<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    $rol = [App\Conversation::REMITENTE, App\Conversation::ADMIN];
    return [
        'ticket_id' => App\Ticket::all()->random()->id,
        
        'mensaje' => $faker->text($maxNbChars = 200),
        'rol' => $rol[mt_rand(0, count($rol)-1)]
    ];
});
