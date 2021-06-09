<?php

use App\Http\Controllers\FoodController;
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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::post('food', [FoodController::class, 'create']);

Route::put('food/{id}', [FoodController::class, 'update']);

Route::delete('foods/{id}', [FoodController::class, 'destroy']);

Route::get('food/{id}', [FoodController::class, 'index']);

Route::get('foods', [FoodController::class, 'show']);