<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateEmployee()
   {
        $accountant = $this->json('POST','/api/accountant',['name' => 'Sally','vat' => 'BE123546']);
        $accountant=$accountant->json('id');
        
        $response = $this->json('POST','/api/employee',['name' => 'Sanne','accountant_id'=>$accountant]);
        
        $response
                ->assertstatus(201);
    }
}
