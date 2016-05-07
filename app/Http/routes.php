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

Route::get('/', function () {
   // return view('welcome');
	return "hello sagar";
});
/*Route::get('user',function(){
	return "This is user";
});*/
//Route::get('user','siteController@index');
Route::get('user/{id}','siteController@show');
Route::get('user','siteController@kanxo');
