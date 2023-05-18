<?php

use App\Http\Controllers\Api\ApiShawarmaController;
use App\Http\Controllers\DistrictController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/filtration', [ApiShawarmaController::class, 'filtration']);
Route::middleware(['district'])->group(function () {
    Route::post('/district', [DistrictController::class, 'create']);
});
Route::get('/district', [DistrictController::class, 'getDistrict']);
