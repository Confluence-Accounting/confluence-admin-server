<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
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
            $user->addresses()->save(
                factory(App\Address::class)->make()
            );
        }
        foreach(App\Kmo::all() as $user)
        {
            $user->addresses()->save(
                factory(App\Address::class)->make()
            );
        }
    }
}
