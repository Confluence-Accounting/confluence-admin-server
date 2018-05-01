<?php

use Illuminate\Database\Seeder;

class BookkeepingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\License::all() as $user)
        {
            $user->bookkeeping()->save(
                factory(App\Bookkeeping::class)->make()
            );
        }
    }
}
