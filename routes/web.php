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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DhikrController@index');
//route for account.blade
// Route::get('account', 'AccountController@index');
// Route::get('account', 'AccountController@add_colum');

//create a signup page and submit d data to db
// Route::get('signup', 'SignupController@signup');
// Route::post('/create', 'SignupController@store');