<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Log;

Route::get('/slack', function (Request $request) {
    Log::channel('slack')->info('Hello!');
    return "Hello World!";
});
