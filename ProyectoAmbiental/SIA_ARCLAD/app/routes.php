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

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::group(array('before' => 'auth'), function()
{
    Route::get('/', function(){ return View::make('index'); });
    
    Route::resource('aspects','AspectController');

    Route::resource('requisites','RequisiteController');

    Route::resource('evaluations','EvaluationController');

    Route::resource('plannings','PlanningController');

    Route::resource('user','UserController');

    Route::get('evaluations/create/{id}','EvaluationController@createEv');
    Route::get('plannings/create/{id}','PlanningController@createPlan');
    Route::get('resumentable','ResumenController@index');

});



