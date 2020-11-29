<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Replies;
use Faker\Generator as Faker;

$factory->define(Replies::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'conversation_id' => factory(App\Conversation::class),
        'body' => $faker->paragraph()
    ];
});
