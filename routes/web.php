<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'lol';
});

Route::group([
    'prefix' => 'api/v1/notebook/'
], function () {
    Route::get('', 'App\Http\Controllers\NotebookController@index');
});
