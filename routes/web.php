<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesTypeController;

Route::get('/', function () {
    return view('welcome'); ## default welcome page by laravel
});

/*
Route::get('/home', function () {
    return view('home/index');   ## index is file inside home folder
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

Route::get('/home/people/{id}', function ($id) {
    $data = [
        ["id" => '1',"name" => "Arjana", 'area' => "php"] ## getting from DB 
       ];
    return view('home.people_details', ['people' => $data[0]]);
});

####################
# CRUD route
####################
Route::get('/companies_type', [CompaniesTypeController::class,'index'])->name('companies_type.index');
Route::get('/companies_type/create', [CompaniesTypeController::class,'create'])->name('companies_type.create');
Route::post('/companies_type', [CompaniesTypeController::class,'store'])->name('companies_type.store');
Route::get('/companies_type/{company_data}/update', [CompaniesTypeController::class,'update'])->name('companies_type.update');
Route::put('/companies_type/{company_data}/update_store', [CompaniesTypeController::class,'update_store'])->name('companies_type.update_store');
