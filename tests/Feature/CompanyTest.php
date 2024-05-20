<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Domain\Entities\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_all_companies()
    {
        $response = $this->get('/api/companies');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_get_a_company_by_id()
    {
        $company = Company::factory()->create();

        $response = $this->get('/api/companies/'.$company->id);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_get_a_company_by_nit()
    {
        $company = Company::factory()->create();

        $response = $this->get('/api/companies/nit/'.$company->nit);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_store_a_new_company()
    {
        $companyData = [
            'name' => 'Example Company',
            'nit' => '123456789',
            // Otros campos necesarios para crear una empresa
        ];

        $response = $this->post('/api/companies', $companyData);

        $response->assertStatus(201);
    }

    /** @test */
    public function it_can_update_an_existing_company()
    {
        $company = Company::factory()->create();

        $updateData = [
            'name' => 'Updated Company Name',
            // Otros campos que se deseen actualizar
        ];

        $response = $this->put('/api/companies/'.$company->id, $updateData);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_delete_an_existing_company()
    {
        $company = Company::factory()->create();

        $response = $this->delete('/api/companies/'.$company->id);

        $response->assertStatus(204);
    }
}
