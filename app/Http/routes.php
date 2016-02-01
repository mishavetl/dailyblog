<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/about', function () {
        return view('about');

    });

    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    // Route::get('/logout', 'Auth\AuthController@getLogout');
    Route::get('/logout', function () {
        Auth::logout();

        return redirect('/');
    });

    Route::get('/back', 'Back\DashboardController@index');

    Route::resource('/back/posts', 'Back\PostController', [
        'except' => ['show'],
    ]);

    Route::resource('/', 'BlogController', [
        'only' => ['index']
    ]);
});
