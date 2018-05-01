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
        factory(App\Bookkeeping::class,50)->create();
    }
}
