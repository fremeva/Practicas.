<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear nuevo Equipo </title>
        
        
<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
                
                
                h5 {
			font-size: 12px;
			margin: 16px 0 0 0;
		}
                .table {
			font-size: 12px;
			margin: 16px 0 0 0;
		}
	</style>
   
    </head>
    <body>
        <h1>Crear Nuevo Equipo</h1>
        
        {{Form::open(array('route'=>'equipos.store'))}}<br>
        {{Form::label('name','Nombre Equipo')}}<br>
        {{Form::text('name','')}}<br>
        {{Form::label('referencia','Coloque la rerencia ')}}<br>
        {{Form::text('referencia','')}}<br>
        
        {{Form::label('sede','Ubicacion ')}}<br>
       {{Form::checkbox('sede[]','CTG')}}{{Form::label('sede','CARTAGENA ')}}<br>
       {{Form::checkbox('sede[]','RIO')}}{{Form::label('sede','RIONEGRO ')}}
       {{Form::checkbox('sede[]','MED')}}{{Form::label('sede','MEDELLI ')}}
       {{Form::checkbox('sede[]','EXT')}}{{Form::label('sede','EXT')}}
       
       
       <br>{{Form::submit('Guardar')}} 
        {{Form::reset('Reiniciar')}}
        {{Form::close()}}
        
        
        
    </body>
</html>


-->
@extends('layouts.master')
@section('content')
<h1>Crear Nuevo Equipo</h1>
        {{ HTML::ul($errors->all()) }}
        {{Form::open(array('route'=>'equipos.store'))}}<br>
        {{Form::label('name','Nombre Equipo')}}<br>
        {{Form::text('name','')}}<br>
        {{Form::label('referencia','Coloque la rerencia ')}}<br>
        {{Form::text('referencia','')}}<br>
        
        {{Form::label('sede','Ubicacion ')}}<br>
       {{Form::checkbox('sede[]',1)}}{{Form::label('sede','CARTAGENA ')}}<br>
       {{Form::checkbox('sede[]',2)}}{{Form::label('sede','RIONEGRO ')}}<br>
       {{Form::checkbox('sede[]',3)}}{{Form::label('sede','MEDELLI ')}}<br>
       {{Form::checkbox('sede[]',4)}}{{Form::label('sede','EXT')}}<br>
       
       
       <br>{{Form::submit('Guardar')}} 
        {{Form::reset('Reiniciar')}}
        {{Form::close()}}
        
@stop

@section('menulateral')
@include('includes.sidebar')
@stop

@section('boton')
<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
@stop
