<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Company;

class CompanyRepository
{
    public function all()
    {
        return Company::all();
    }

    public function find($id)
    {
        return Company::find($id);
    }
    
    public function findByNit($nit)
    {
        return Company::where('nit', $nit)->first();
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update($id, array $data)
    {
        $company = Company::find($id);
        if ($company) {
            $company->update($data);
        }
        return $company;
    }

    public function delete($id)
    {
        $company = Company::find($id);
        if ($company) {
            return $company->delete();
        }
        return false;
    }
}
