<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_users()
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
    }
}
