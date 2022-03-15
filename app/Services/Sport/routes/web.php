<?php

/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Services\Sport\Http\Controllers\SportController;

Route::group(['prefix' => 'sport'], function () {

    // The controllers live in src/Services/Sport/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', [SportController::class, 'index']);

    Route::post('/submit', [SportController::class, 'add']);
});
