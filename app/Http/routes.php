<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/browse/', 'BrowseController@index');
Route::get('/what-is-salvia', function(){
    return view('what-is-salvia');
   });

Route::resource('u', 'UserController');
Route::resource('e', 'ReportController');
Route::resource('c', 'CommentController');
