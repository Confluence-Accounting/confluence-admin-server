<?php

use Illuminate\Database\Seeder;

class TransactieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Transactie::class,50)->create();
    }
}
