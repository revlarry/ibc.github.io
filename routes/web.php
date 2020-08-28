<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
    // return view('welcome');
    // return view('register.index');
});

Route::get('/about',function(){
    return view('register.about');
});

Route::get('/programme',function(){
    return view('register.programme');
});

Route::resource('register','RegisterController');
