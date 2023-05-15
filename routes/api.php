<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/logout',[AuthController::class,'logout']);
    Route::post('/refresh',[AuthController::class,'refresh']);
    Route::post('/me',[AuthController::class,'me']);

});

// Group post APIs

Route::group([
    'middleware' => 'api',
    'prefix' => 'post'
], function ($router) {
    Route::post('/new',[PostController::class,'createPost']);

});

Route::post('/account',[UserController::class,'createUser']);
