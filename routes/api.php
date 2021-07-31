<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ph\PhController;
use App\Http\Controllers\Moisture\MoistureController;
use App\Http\Controllers\Humidity\HumidityController;
use App\Http\Controllers\Temperature\TemperatureController;

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
Route::resource('ph',PhController::class,['only'=>['store']])->middleware(['auth']);
Route::resource('moisture',MoistureController::class,['only'=>['store']])->middleware(['auth']);
Route::resource('humidity',HumidityController::class,['only'=>['store']])->middleware(['auth']);
Route::resource('temperature',TemperatureController::class,['only'=>['store']])->middleware(['auth']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
