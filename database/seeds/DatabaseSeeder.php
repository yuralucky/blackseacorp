<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(EmployeesTableSeeder::class);
        factory('App\Employee', 50 )->create();
        factory('App\Test',50)->create();
    }
}
