<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\Services\CompanyService;
use App\Domain\Repositories\CompanyRepository;
use Mockery;

class CompanyServiceTest extends TestCase
{
    public function test_get_all_companies()
    {
        $companyRepository = Mockery::mock(CompanyRepository::class);
        $companyRepository->shouldReceive('getAll')->andReturn([]);

        $companyService = new CompanyService($companyRepository);
        $companies = $companyService->getAllCompanies();

        $this->assertEmpty($companies);
    }
}
