<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/slack', function (Request $request) {
    Log::channel('slack')->info('Hello!');
    return "Hello World!";
});
