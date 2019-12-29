<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Manager;

$factory->define(Manager::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => Str::random(7).'@gmail.com',
        'image_url' => $faker->image,
        'shop_id' => $faker->randomDigit
    ];
});
