<?php

namespace App\Domain\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function getAll()
    {
        return Company::all();
    }
}
