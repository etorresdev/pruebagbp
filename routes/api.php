<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\ProductoController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//
Route::apiResource('/bodegas', BodegaController::class);

Route::apiResource('/productos', ProductoController::class);
