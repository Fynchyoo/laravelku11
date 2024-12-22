<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {

    return view('about', ['nama' => 'Alfin Cahyo Ramadhan']);
});

Route::get('/Portofolio', function () {
    return view('Portofolio');
});

Route::get('/Education', function () {
    return view('Education');
});

Route::get('/Contack', function () {
    return view('Contack');
});
