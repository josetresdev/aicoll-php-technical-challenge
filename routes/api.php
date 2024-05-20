<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return response()->json(['message' => '¡Bienvenido a tu servicio Aicoll!'], 200);
});


Route::apiResource('companies', CompanyController::class);
Route::get('/users', [UserController::class, 'index']);