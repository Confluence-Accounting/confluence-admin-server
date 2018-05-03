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
       //voor elke licentie wil ik een boekhouding, maar dan heb ik ook een KMO nodig
       
        
        foreach(App\License::all() as $license)
        {
            $kmo=factory(App\Kmo::class)->create();
           
            $bookkeeping=factory(App\Bookkeeping::class)->make();
            $bookkeeping->kmo()->associate($kmo);
            $bookkeeping->license()->associate($license);
            
            $bookkeeping->save();
            
        }
        
    }
}
