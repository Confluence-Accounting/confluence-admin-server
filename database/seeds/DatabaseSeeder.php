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
       $this->call([
            AccountantsTableSeeder::class,
            AddressTableSeeder::class,
            TransactieTableSeeder::class,
            InvoiceTableSeeder::class,
            UserTableSeeder::class,
            BookkeepingTableSeeder::class,
            LicenseTableSeeder::class,
            EmployeeTableSeeder::class,
            BookkeepingTableSeeder::class
       ]);
    }
}
