<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about',function(){

    return view('about');
});

Route::get('/contact',function(){

    return view('contact');
});


Route::prefix('admin')->group(function(){
    Route::prefix('users')->group(function(){
        Route::get('index',[UsersController::class, "index"]);
        Route::get('show',[UsersController::class, "show"]);
        Route::get('create',[UsersController::class,"create"]);


    });
});




