<?php

use Illuminate\Database\Seeder;

class AccountantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ik maak 50 accountants
        factory(App\Accountant::class,50)->create();
    }
}
