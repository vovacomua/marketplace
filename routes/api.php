<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ProjectController;

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

Route::middleware(['checkAuthorization'])->group(function () {
    Route::apiResource('buildings', BuildingController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('products', BuildingController::class)->parameters([
        'products' => 'building', // This maps the "products" URI segment to the "building" parameter
    ]);
});
