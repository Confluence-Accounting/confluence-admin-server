<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LicenseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testCreateLicense()
   {
        $accountant = $this->json('POST','/api/accountant',['name' => 'Sally','vat' => 'BE123546']);
        $accountant=$accountant->json('id');
        
        $response = $this->json('POST','/api/license',['status' => 'Basic','accountant_id'=>$accountant]);
        
        $response
                ->assertstatus(201);
    }
}
