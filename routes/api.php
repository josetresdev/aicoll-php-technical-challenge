<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return response()->json(['message' => '¡Bienvenido a tu servicio Aicoll!'], 200);
});


Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);