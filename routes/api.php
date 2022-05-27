<?php

use App\Http\Controllers\LtaController;
use App\Http\Controllers\SwbsController;
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

Route::post('/lta', [LtaController::class, 'api1']);

Route::post('/sistem', [SwbsController::class, 'ApiNamaSistem']);
