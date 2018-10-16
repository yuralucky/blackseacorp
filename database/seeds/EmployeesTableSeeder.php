<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('App\Employee');

        DB::table('employees')->insert([
            'name' => $faker->name,
            'position' => 'boss',
            'boss_id'=>$faker->numberBetween(1,20),
            'date_of_employment'=>Carbon\Carbon::now(),
            'salary'=>$faker->randomFloat()
        ]);
    }
}
