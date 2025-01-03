<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // try{
       // $response = $this->post('/api/region',['name'=>'new region1']);
        $response = $this->get('/');

        $response->assertStatus(200);
        // }catch(\Exception $e){
        // Log::error('TEST ERROR'.$e->getMessage(),['context'=>'Testing Context']);
        // }
    }
}
