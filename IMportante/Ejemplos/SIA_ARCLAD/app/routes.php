<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login',array('uses'=>'HomeController@showlogin'));
Route::post('login',array('uses'=>'HomeController@dologin'));
Route::get('logout',array('uses'=>'HomeController@dologout'));



Route::get('/', function()
{
	return View::make('layouts.login');
});


Route::group(array('before' => 'auth'), function()
{

Route::resource('aspects','AspectController');

Route::resource('requisites','RequisiteController');

Route::resource('evaluations','EvaluationController');

Route::resource('plannings','PlanningController');
});