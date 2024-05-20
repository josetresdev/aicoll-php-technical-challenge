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
        return response()->json($this->companyService->getAllCompanies());
    }

    public function show($id)
    {
        return response()->json($this->companyService->getCompanyById($id));
    }

    public function store(Request $request)
    {
        $company = $this->companyService->createCompany($request->all());
        return response()->json($company, 201);
    }

    public function update(Request $request, $id)
    {
        $company = $this->companyService->updateCompany($id, $request->all());
        return response()->json($company);
    }

    public function destroy($id)
    {
        $this->companyService->deleteCompany($id);
        return response()->json(null, 204);
    }
}
