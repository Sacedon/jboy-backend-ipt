<?php

use App\Http\Controllers\MotorController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/shops', [ShopController::class, 'index']);
Route::get('/shops/{shop}', [ShopController::class, 'show']);
Route::post('/shops', [ShopController::class, 'store']);
Route::put('/shops/{shop}', [ShopController::class, 'update']);
Route::delete('/shops/{shop}', [ShopController::class, 'destroy']);

Route::get('/motors', [MotorController::class, 'index']);
Route::get('/motors/{motor}', [MotorController::class, 'show']);
Route::post('/motors', [MotorController::class, 'store']);
Route::put('/motors/{motor}', [MotorController::class, 'update']);
