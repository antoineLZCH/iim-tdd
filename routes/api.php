<?php

use App\Http\Controllers\AdventuresController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ItemsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('adventures', [AdventuresController::class, "store"]);

Route::post('/characters', [CharacterController::class, "store"]);

Route::get('items', [ItemsController::class, "index"]);
Route::post('items', [ItemsController::class, "store"]);
