<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 15),
        'name' => $faker->word(),
        'good_level' => $faker->numberBetween(1, 5),
        'number' => $faker->numberBetween(1, 4),
        'time_required' => $faker->numberBetween(20, 120), //５分刻みにする方法、後ほど調べる。
        'count' => $faker->numberBetween(1, 50),
        'comment' => $faker->text(50),
    ];
});
