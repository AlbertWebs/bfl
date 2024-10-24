<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/business-training-mentorship', function () {
    return view('business');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});


Route::get('/terms-and-conditions', function () {
    return view('terms');
});



