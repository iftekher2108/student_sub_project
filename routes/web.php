<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::controller(HomeController::class)->group(function(){
    Route::get('/home','index')->name('home');
    Route::get('/user-setting','user_setting')->name('user-setting');

});


