<?php

use Faker\Generator as Faker;

$factory->define(App\Test::class, function (Faker $faker) {
    return [
        'name'=>$faker->country,
        'parent_id'=>$faker->numberBetween(0,5)
    ];
});
