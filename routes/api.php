<?php

use App\Http\Controllers\Api\v1\InfoController;
use App\Http\Controllers\Api\v1\LeaguesController;
use App\Http\Controllers\Api\v1\MembersController;
use App\Http\Controllers\Api\v1\TeamsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'v1'
], function ($router) {
    Route::resource('league', LeaguesController::class);
    Route::resource('team', TeamsController::class);
    Route::resource('member', MembersController::class);
});