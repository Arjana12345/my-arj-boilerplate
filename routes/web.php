<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesTypeController;
use Illuminate\Http\Request;

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
})->middleware('session_check');

Route::get('/home/people/{id}', function ($id) {
    $data = [
        ["id" => '1',"name" => "Arjana", 'area' => "php"] ## getting from DB 
       ];
    return view('home.people_details', ['people' => $data[0]]);
})->middleware('session_check');

####################
# CRUD route
####################

#########################
## Route group
##########################
Route::middleware(['session_check'])->group(function(){

        Route::group(['prefix' => '/companies_type'],function(){
        Route::get('/', [CompaniesTypeController::class,'index'])->name('companies_type.index');
        Route::get('/create', [CompaniesTypeController::class,'create'])->name('companies_type.create');
        Route::post('/', [CompaniesTypeController::class,'store'])->name('companies_type.store');
        Route::get('/{company_data}/update', [CompaniesTypeController::class,'update'])->name('companies_type.update');
        Route::put('/{company_data}/update_store', [CompaniesTypeController::class,'update_store'])->name('companies_type.update_store');
        Route::delete('/{company_data}/destroy', [CompaniesTypeController::class,'destroy'])->name('companies_type.destroy');

    });

});

##################
## No access
###################
Route::get('/no-access', function () {
   echo 'Sorry..!';
   die;
});


####################
## Add session 
## by pass login
###################
# pass array
Route::get('/set-session', function (Request $request) {
    $request->session()->put('user_id','1');
    return redirect('/get-all-session');
});

Route::get('/get-all-session', function (Request $request) {
    $all_session = session()->all();
    print_r($all_session);
    
});

Route::get('/unset-session', function (Request $request) {
    $all_session = session()->forget('user_id');
    return redirect('/get-all-session');
    
});