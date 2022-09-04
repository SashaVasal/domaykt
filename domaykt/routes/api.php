<?php

use App\Http\Controllers\API\User_controller;
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

Route::get('info_about_flat/{flat_id}',[User_controller::class,'info_about_flat']);
Route::get('stroy/{stroy_id}',[User_controller::class,'stroy']);
Route::get('house/{house_id}',[User_controller::class,'house']);
Route::get('flats_from_house/{house_id}',[User_controller::class,'flats_from_house']);


