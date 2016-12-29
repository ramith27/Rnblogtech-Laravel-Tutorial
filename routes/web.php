<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','Url@home');
Route::get('/{i}','Url@retrive');
Route::get('/url/add', 'Url@add');
Route::post('/url/submit', 'Url@submitadd');
