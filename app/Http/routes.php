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

Route::get('/', [
    'as' => 'home',
    'uses' =>'HomeController@index'
]);

Route::get('/browse/{level?}', [
    'as' => 'browse',
    'uses' =>'BrowseController@index'
]);

Route::get('/search', [
    'as' => 'search',
    'uses' => function(){
        return view('search');
    }
]);

Route::get('/what-is-salvia', [
    'as' => 'whatissalvia',
    'uses' => function(){
        return view('whatissalvia');
    }
]);



Route::resource('user', 'UserController');
Route::resource('report', 'ReportController');
Route::resource('comment', 'CommentController');
