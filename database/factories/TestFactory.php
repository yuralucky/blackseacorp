<?php

use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'position' => 'boss',
        'boss_id'=>$faker->numberBetween(1,20),
        'date_of_employment'=>Carbon\Carbon::now(),
        'salary'=>$faker->numberBetween(100,20000)
    ];
});
