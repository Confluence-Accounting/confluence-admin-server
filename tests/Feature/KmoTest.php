<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KmoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateKmo()
    {
        $response = $this->json('POST','/api/kmo',['name' => 'Sally','vat' => 'BE123546']);
        
        $response
                ->assertstatus(201);
    }
}
