<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'v1',
    'namespace' => 'Api',
    'middleware' => \App\Http\Middleware\JsonMiddleware::class
], function() {
    Route::apiResource('profile', 'ProfileController');
});
