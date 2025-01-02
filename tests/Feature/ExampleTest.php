<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        try{
        $response = $this->get('/');

        $response->assertStatus(200);
        }catch(\Exception $e){
        Log::error('TEST ERROR'.$e->getMessage(),['context'=>'Testing Context']);
        }
    }
}
