<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'lol';
});

Route::group([
    'prefix' => 'api/v1/'
], function () {
    Route::get('notebook', 'App\Http\Controllers\NotebookController@index');
});
