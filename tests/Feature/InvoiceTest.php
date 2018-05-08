<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvoiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateInvoice()
    {
        $accountant = $this->json('POST','/api/accountant',['name' => 'Sally','vat' => 'BE123546']);
        $accountant=$accountant->json('id');
        
        $response = $this->json('POST','/api/invoice',['name' => 'Bvba',"vat"=>'BE6454567','amount' => '€1000','accountant_id'=>$accountant]);
        
        $response
                ->assertstatus(201);
    }
}
