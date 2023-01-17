<?php

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

/* Version 1 for Shop API */
Route::group(array('prefix'=> 'v1', 'namespace'=> 'v1'), function(){
    Route::get('/', function(){
        $test = true;
        return response()->json(true);
    });
});
