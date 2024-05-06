<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/api', [MainController::class, 'mainAPI']);
Route::get('/api_opd/{slug}', [MainController::class, 'viewPageDataAPI']);
Route::post('/api_opd/{slug}', [MainController::class, 'returnPageDataAPI']);
Route::get('/api_opd/pilihDataAPI/{slug_opd}', [MainController::class, 'pilihDataDigunakanAPI']);
