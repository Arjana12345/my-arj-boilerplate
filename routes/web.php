<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); ## defasult welcome page by laravel
});

/*
Route::get('/home', function () {
    return view('home/index');   ## index is file inside home folder
});

Route::get('/home', function () {
    return view('home.index', ['name' => 'Arjana']);
});
*/

# pass array
Route::get('/home', function () {
    return view('home.index', ['name' => 'Arjana']);
});


# pass array
Route::get('/home/people', function () {
    $data = [
        ["id" => '1',"name" => "Arjana", 'area' => "php"],
        ["id" => '2',"name" => "suniti", 'area' => "php"]

    ];
    return view('home.people', ['people' => $data]);
});

Route::get('/home/people/', function () {
    $data = [
        ["id" => '1',"name" => "Arjana", 'area' => "php"],
        ["id" => '2',"name" => "suniti", 'area' => "php"]

    ];
    return view('home.people', ['people' => $data]);
});