<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'user_id' => '',
        'brand' => $faker->company,
        'model' => $faker->firstNameFemale,
        'color' => $faker->colorName(),
        'price' => rand(50,750) + rand(0,99)/100
    ];
});
