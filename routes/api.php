<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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



Route::get('/getCountries', [APIController::class, 'getCountries']);
Route::get('/getStates', [APIController::class, 'getStates']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
