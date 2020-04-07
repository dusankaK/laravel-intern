<?php

use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->title,
        'content'=> $faker->text(50),
        'user_id'=> User::all()->random()->id
    ];
});
