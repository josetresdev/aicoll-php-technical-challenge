<?php

namespace App\Http\Controllers;

use App\Domain\Services\CompanyService;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends ApiController
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->getAllCompanies();
        return $this->successResponse($companies);
    }

    public function show($id)
    {
        $company = $this->companyService->getCompanyById($id);
        if (!$company) {
            return $this->errorResponse('Recurso no encontrado', 404);
        }
        return $this->successResponse($company);
    }

    public function showByNit($nit)
    {
        $company = $this->companyService->findByNit($nit);

        if (!$company) {
            return response()->json([
                'message' => 'Company not found'
            ], 404);
        }

        return response()->json($company, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nit' => 'required|string|max:20|unique:companies',
            'address' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);

        $company = $this->companyService->createCompany($validatedData);
        return $this->createdResponse($company);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'nit' => 'sometimes|required|string|max:20|unique:companies,nit,' . $id,
            'address' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|string|in:active,inactive',
        ]);

        $company = $this->companyService->updateCompany($id, $validatedData);
        if (!$company) {
            return $this->errorResponse('Recurso no encontrado', 404);
        }
        return $this->successResponse($company, 'Recurso actualizado con éxito');
    }

    public function destroy($id)
    {
        $deleted = $this->companyService->deleteCompany($id);
        if (!$deleted) {
            return $this->errorResponse('Recurso no encontrado', 404);
        }
        return $this->successResponse(null, 'Recurso eliminado con éxito');
    }
}
