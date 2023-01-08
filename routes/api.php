<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderManagementRestController;


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

Route::get('listOrderByUser/{userId}', 'App\Http\Controllers\Orde   rManagermentRestController@listOrderByUser');
Route::get('getOrderById/{orderId}', 'App\Http\Controllers\OrderManagermentRestController@getOrderById');
// Route::get('listOrderByUser/{userId}', 'App\Http\Controllers\OrderManagermentRestController@listOrderByUser');

Route::post('rate-comment/{orderId}', 'App\Http\Controllers\OrderManagermentRestController@rateComment');


// Route::post('/rate-comment/{orderID}',[
//     OrderManagementRestController::class,
//     'rate_comment'
// ]);


