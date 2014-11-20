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

//Rutas para Login, Logout
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

//Filtro de Seguridad de Autenticacion
Route::group(array('before' => 'auth'), function() {
    
    Route::get('/', function() {
        return View::make('index');
    });
    
    //Usuarios
    Route::resource('user', 'UserController');

    //Index
    Route::get('/index', function() {
        return View::make('index');
    });

    //Modulo II
    //Aspectos Asociados
    Route::resource('aspects', 'AspectController');

    //Requisitos Legales
    Route::resource('requisites', 'RequisiteController');

    //Evaluacion Legal
    Route::resource('evaluations', 'EvaluationController');
    Route::get('evaluations/create/{id}', 'EvaluationController@createEv');


    //Planeacion Legal
    Route::resource('plannings', 'PlanningController');
    Route::get('plannings/create/{id}', 'PlanningController@createPlan');

    //Resumen
    Route::get('resumentable', 'ResumenController@index');
    Route::get('resumenxaplicacion', 'ResumenController@applicationTable');
    Route::get('resumenxcumplimiento', 'ResumenController@complianceTable');
});
