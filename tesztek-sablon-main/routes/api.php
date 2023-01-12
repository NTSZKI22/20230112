<?php

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

Route::group(['prefix' => 'merchants'], function() {
    Route::get('/get', [\App\Http\Controllers\MerchantController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\MerchantController::class, 'create']);
    Route::put('/update/{merchant}', [\App\Http\Controllers\MerchantController::class, 'update']);
    Route::delete('/delete/{merchant}', [\App\Http\Controllers\MerchantController::class, 'delete']);
});

Route::group(['prefix' => 'brands'], function() {
    Route::get('/get', [\App\Http\Controllers\BrandController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\BrandController::class, 'create']);
    Route::put('/update/{brand}', [\App\Http\Controllers\BrandController::class, 'update']);
    Route::delete('/delete/{brand}', [\App\Http\Controllers\BrandController::class, 'delete']);
});

Route::group(['prefix' => 'models'], function() {
    Route::get('/get', [\App\Http\Controllers\ModelController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\ModelController::class, 'create']);
    Route::put('/update/{model}', [\App\Http\Controllers\ModelController::class, 'update']);
    Route::delete('/delete/{model}', [\App\Http\Controllers\ModelController::class, 'delete']);
});

Route::group(['prefix' => 'cars'], function() {
    Route::get('/get', [\App\Http\Controllers\CarController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\CarController::class, 'create']);
    Route::put('/update/{car}', [\App\Http\Controllers\CarController::class, 'update']);
    Route::delete('/delete/{car}', [\App\Http\Controllers\CarController::class, 'delete']);
});
