<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,6),
        'title' => $faker->sentence(7),
        'content' => $faker->paragraph(3),
        'categories' => $faker->randomElement(['news', 'academics', 'student life', 'scholarship']),
        'published' => 1
    ];
});
