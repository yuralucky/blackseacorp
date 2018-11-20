<?php

use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'name_full' => $faker->name,
        'position' => 'junior',
        'parent_id'=>$faker->numberBetween(0,5),
        'date_of_employment'=>Carbon\Carbon::now(),
        'salary'=>$faker->numberBetween(100,2000)
    ];
});
