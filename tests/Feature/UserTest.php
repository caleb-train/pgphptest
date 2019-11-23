<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/api/user', ['id' => 1, 'password' => 'password', 'comments' => 'hello']);

        $response
            ->assertStatus(200)
            ->assertSeeText('OK');
    }
}
