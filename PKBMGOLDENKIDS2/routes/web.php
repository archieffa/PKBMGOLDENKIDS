<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/daftar2', function () {
    return view('daftar2');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/detailw', function () {
    return view('detailw');
});

Route::get('/kelulusan', function () {
    return view('kelulusan');
});