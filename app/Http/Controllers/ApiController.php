<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    protected function successResponse($data, $message = 'Proceso exitoso', $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function createdResponse($data, $message = 'Creación exitosa'): JsonResponse
    {
        return $this->successResponse($data, $message, 201);
    }

    protected function errorResponse($message, $code = 400): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $code);
    }

    protected function validationErrorResponse($errors, $message = 'Error de estructura'): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'errors' => $errors,
            'message' => $message
        ], 422);
    }
}
