<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'prefix' => 'items'
    ],
    function () {
        Route::get('/', 'App\Http\Controllers\ItemController@index');
        Route::post('/', 'App\Http\Controllers\ItemController@store');
        Route::post('/{item}', 'App\Http\Controllers\ItemController@update');
        Route::delete('/{item}', 'App\Http\Controllers\ItemController@destroy');
    }
);
