<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => '¡Bienvenido a tu servicio Aicoll!'], 200);
});
