<?php

use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'position' => 'junior',
        'boss_id'=>$faker->numberBetween(1,5),
        'date_of_employment'=>Carbon\Carbon::now(),
        'salary'=>$faker->numberBetween(100,2000)
    ];
});
