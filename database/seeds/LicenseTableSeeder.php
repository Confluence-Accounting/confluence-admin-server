<?php

use Illuminate\Database\Seeder;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //voor elke accountant wil ik een licentie
        foreach(App\Accountant::all() as $user)
        {
            $user->licenses()->save(
                factory(App\License::class)->make()
            );
        }
    }
}
