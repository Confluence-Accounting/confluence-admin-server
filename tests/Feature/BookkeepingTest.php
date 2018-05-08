<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookkeepingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testCreateBookkeeping()
      {
        $accountant = $this->json('POST','/api/accountant',['name' => 'Sally','vat' => 'BE123546']);
        $accountant=$accountant->json('id');
        
        $license = $this->json('POST','/api/license',['status' => 'Basic','accountant_id'=>$accountant]);
        $license=$license->json('id');
        
        $kmo = $this->json('POST','/api/kmo',['name' => 'Sally','vat' => 'BE123546']);
        $kmo=$kmo->json('id');
        
        $response = $this->json('POST','/api/bookkeeping',['name' => 'Bvba',"vat"=>'BE6454567','amount' => '€1000','kmo_id'=>$kmo,'license_id' =>$license]);
        
        $response
                ->assertstatus(201);
    }
}
