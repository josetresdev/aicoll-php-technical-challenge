<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_companies()
    {
        $response = $this->get('/api/companies');
        $response->assertStatus(200);
    }
}
