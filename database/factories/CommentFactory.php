<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(50),
        'shop_id' => 3,
        'user_id' => 21
    ];
});
