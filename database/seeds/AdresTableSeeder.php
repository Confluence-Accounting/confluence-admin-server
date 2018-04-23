<?php

use Illuminate\Database\Seeder;

class AdresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Adres::class,50)->create();
    }
}
