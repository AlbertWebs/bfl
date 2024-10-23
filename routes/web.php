<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/business-training-mentorship', function () {
    return view('business');
});

