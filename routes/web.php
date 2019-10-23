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
    print "Szia";
    return view('rian');
});

//Route::get('users', 'UsersController@get_user');

Route::get('users', function(){
	return View::make('users');
});
