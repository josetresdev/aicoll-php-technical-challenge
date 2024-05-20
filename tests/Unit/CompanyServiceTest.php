<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\Repositories\CompanyRepository;
use App\Domain\Services\CompanyService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_find_company_by_nit()
    {
        $company = Company::factory()->create([
            'nit' => '123456789'
        ]);

        $repository = new CompanyRepository();
        $service = new CompanyService($repository);

        $foundCompany = $service->findByNit('123456789');

        $this->assertEquals($company->id, $foundCompany->id);
    }
}
