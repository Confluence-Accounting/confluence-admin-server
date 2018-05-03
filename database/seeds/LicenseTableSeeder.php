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
        
        foreach(App\Accountant::all() as $user)
        {
            $user->licenses()->save(
                factory(App\License::class)->make()
            );
        }
    }
}
