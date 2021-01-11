<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'title' => $faker->realText(10),
        'body' => $faker->realText(1000)
    ];
});
