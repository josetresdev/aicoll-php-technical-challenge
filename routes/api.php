<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return response()->json(['message' => '¡Bienvenido a tu servicio Aicoll!'], 200);
});


Route::apiResource('companies', CompanyController::class);
Route::apiResource('users', UserController::class);