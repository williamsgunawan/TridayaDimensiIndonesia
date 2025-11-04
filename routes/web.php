<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/our-clients', function () {
    return view('ourclients');
});

Route::get('/indodaya', function () {
    return view('iat_home');
});

Route::get('/indodaya/services', function () {
    return view('iat_services');
});

Route::get('/indodaya/career', function () {
    return view('iat_career');
});

Route::get('/kotakhijauutama', function () {
    return view('khu_home');
});

Route::get('/kotakhijauutama/program', function () {
    return view('khu_program');
});

Route::get('/kotakhijauutama/services', function () {
    return view('khu_services');
});