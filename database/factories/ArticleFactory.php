<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => Factory(User::class),
        'title' => $faker->title,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
