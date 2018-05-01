<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Accountant::all() as $user)
        {
            $user->employees()->save(
                factory(App\Employee::class)->make()
            );
        }
    }
}
