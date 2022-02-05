<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
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

Route::get('{link}', [MessageController::class, 'getData']);
Route::post('/user', [UserController::class, 'store']);
Route::post('{user:link}/message', [MessageController::class, 'store']);
Route::post('{user:link}/{id}/reply', [MessageController::class, 'reply']);