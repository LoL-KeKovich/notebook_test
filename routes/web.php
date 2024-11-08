<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'api/v1/'
], function () {
    Route::get('notebook', 'App\Http\Controllers\NotebookController@index');
    Route::post('notebook', 'App\Http\Controllers\NotebookController@store');
    Route::get('notebook/{id}', 'App\Http\Controllers\NotebookController@findById');
    Route::post('notebook/{id}', 'App\Http\Controllers\NotebookController@update');
    Route::delete('notebook/{id}', 'App\Http\Controllers\NotebookController@delete');
});
