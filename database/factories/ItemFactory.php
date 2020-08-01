<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName . ' ' . $faker->word . ' ' . $faker->randomNumber,
        'user_id' => $faker->numberBetween(1, 500),
        'location_id' => $faker->numberBetween(1, 5),
        'put_in_recycling_bin' => $faker->randomElement(null, $faker->dateTime())
    ];
});
