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



Route::get('/About', function () {
    return view('About');
}); 

Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/Works', function () {
    return view('Works');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/sendemail', 'ContactController@index');
Route::post('Contact', 'ContactController@send');