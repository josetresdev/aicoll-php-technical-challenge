<?php

namespace App\Domain\Services;

use App\Domain\Repositories\CompanyRepository;

class CompanyService
{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function getAllCompanies()
    {
        return $this->companyRepository->getAll();
    }

    public function getCompanyById($id)
    {
        return Company::find($id);
    }

    public function createCompany(array $data)
    {
        return Company::create($data);
    }

    public function updateCompany($id, array $data)
    {
        $company = Company::find($id);
        if ($company) {
            $company->update($data);
            return $company;
        }
        return null;
    }

    public function deleteCompany($id)
    {
        $company = Company::find($id);
        if ($company) {
            $company->delete();
            return true;
        }
        return false;
    }
}
