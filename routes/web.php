<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); ## defasult welcome page by laravel
});


Route::get('/home', function () {
    return view('home/index');
});