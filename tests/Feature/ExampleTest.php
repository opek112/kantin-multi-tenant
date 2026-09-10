<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
use Tests\TestCase;

class ExampleTest extends TestCase
{
<<<<<<< HEAD
    use RefreshDatabase;

    public function test_returns_a_successful_response(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
=======
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
    }
}
