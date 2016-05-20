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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'api/v1'], function(){

	//Route::get('request/store', 'FormRequestController@store');
	//Route::get('request/{id}', 'FormRequestController@getRequest');
	//Route::get('request/all', 'FormRequestController@getRequestsAll');

	Route::resource('form_request', 'FormRequestController');

});



Route::get('panel', 'PanelController@index');