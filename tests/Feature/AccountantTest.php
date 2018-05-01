<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountantTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateAccountant()
    {
        $response = $this->json('POST','/api/accountant',['name' => 'Sally','vat' => 'BE123546']);
        
        $response
                ->assertstatus(201);
    }
}
