<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 20),
        'name' => $faker->word(),
        'comment' => $faker->text(50),
    ];
});
