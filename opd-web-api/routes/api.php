<?php

use App\Http\Controllers\API\DataOPDController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('data_putr', [DataOPDController::class, 'index']);
Route::get('data_perpusip', [DataOPDController::class, 'apiPerpusip']);
