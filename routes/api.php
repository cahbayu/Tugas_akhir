<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NodeController;
use App\Http\Controllers\Api\SensorController;
use App\Http\Controllers\Api\SoilMoistureDataController;
use App\Http\Controllers\Api\LogController;

Route::get('/nodes', [NodeController::class, 'index']);
Route::post('/nodes', [NodeController::class, 'store']);
Route::get('/sensors', [SensorController::class, 'index']);
Route::post('/sensors', [SensorController::class, 'store']);
Route::get('/soil-moisture-data', [SoilMoistureDataController::class, 'index']);
Route::post('/soil-moisture-data', [SoilMoistureDataController::class, 'store']);
Route::get('/logs', [LogController::class, 'index']);
Route::post('/logs', [LogController::class, 'store']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
