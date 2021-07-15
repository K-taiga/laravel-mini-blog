<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('','HomeController@index');
Route::get('blogs/{blog}','HomeController@show')->name('blog.show');
Route::get('signup','SignupController@index');
Route::post('signup','SignupController@store');