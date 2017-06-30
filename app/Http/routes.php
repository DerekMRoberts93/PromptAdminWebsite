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

Route::get('/', 'MainController@home');

//------------------------------------------Nagios---------------------------------------//


Route::get('/secondary-nav', 'MainController@secondary');

//---------------------------Login/Logout w/ CAS-----------------------------------------//
Route::get('/login', 'MainController@loginAction');
Route::get('/logout', 'MainController@logoutAction');

Route::get('/mstatus', 'MainController@mstatus');


