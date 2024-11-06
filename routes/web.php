<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'lol';
});

Route::group([
    'prefix' => 'api/v1/notebook/'
], function () {
    Route::post('create', 'App\Http\Controllers\UserController@store');
    Route::put('update', 'App\Http\Controllers\UserController@update');
});
