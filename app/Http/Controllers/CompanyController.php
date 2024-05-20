<?php

namespace App\Http\Controllers;

use App\Domain\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->getAllCompanies();
        return response()->json($companies);
    }
}
