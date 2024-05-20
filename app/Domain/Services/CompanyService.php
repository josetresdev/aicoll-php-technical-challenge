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
        return $this->companyRepository->find($id);
    }

    public function findByNit($nit)
    {
        return $this->companyRepository->findByNit($nit);
    }

    public function createCompany($data)
    {
        return $this->companyRepository->create($data);
    }

    public function updateCompany($id, $data)
    {
        $company = $this->companyRepository->find($id);
        if (!$company) {
            return null;
        }
        $this->companyRepository->update($id, $data);
        return $company->fresh();
    }

    public function deleteCompany($id)
    {
        $company = $this->companyRepository->find($id);
        if (!$company) {
            return false;
        }
        return $this->companyRepository->delete($id);
    }
}
