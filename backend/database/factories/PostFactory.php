<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'category_id' => $faker->numberBetween(1, 10),
        'title' => $faker->sentence(9),
        'subtitle' => $faker->paragraph(4),
        'content' => $faker->text(),
        'status' => $faker->numberBetween(1, 3),
        'avg_rate' => 0
    ];
});
