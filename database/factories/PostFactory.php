<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = ucwords($faker->words(mt_rand(1,8), true));
    return [
        'title' => $title,
        'slug' => \Str::slug($title),
        'content' => "# $title\n\n{$faker->paragraph}\n\n{$faker->paragraph}",
    ];
});
