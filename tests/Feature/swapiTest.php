<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class swapiTest extends TestCase
{
    public function test_pages(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response = $this->get('/people');
        $response->assertStatus(200);
        $response = $this->get('/starships');
        $response->assertStatus(200);
        $response = $this->get('/planets');
        $response->assertStatus(200);
    }
}
