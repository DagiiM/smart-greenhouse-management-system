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

Route::resource('humidities',HumidityController::class,['only'=>['store']]);
Route::resource('phs',PhController::class,['only'=>['store']]);
Route::resource('temperatures',TemperatureController::class,['only'=>['store']]);
Route::resource('moistures',MoistureController::class,['only'=>['store']]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
