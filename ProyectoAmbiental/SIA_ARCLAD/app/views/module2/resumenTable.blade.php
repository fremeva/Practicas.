<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Resumen Table
@stop

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
  <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
</ul>
@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
            </div>
@endif


<div id="carousel-example-generic" class="carousel slide center-block" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      {{ HTML::image('image/construccion.jpg', 'en Construccion') }}
      <div class="carousel-caption">
    
      </div>
    </div>
    <div class="item">
      {{ HTML::image('image/construccion.jpg', 'en Construccion') }}
      <div class="carousel-caption">

      </div>
    </div>
  
</div>
</div> 
<!--
<h1>Resumen</h1>
<p>A continuacion se muestra el resumen de acuerdo a los aspectos asociados que cumplen o no cumplen en la empresa:</p>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th rowspan="2" class="text-center">Aspectos Asociado</th>
            <th colspan="7" class="text-center">Aplicacion</th>
            <th colspan="6" class="text-center">Cumplimiento</th>
        </tr>
        <tr>
            <th class="text-center">Si</th>
            <th class="text-center">No</th>
            <th class="text-center">A terceros</th>
            <th class="text-center">Autoridades Ambientales</th>
            <th class="text-center">Gestores Ambientales</th>
            <th class="text-center">Solo Informativa</th>
            <th class="text-center">Proveedores</th>
            
            <th class="text-center">Si</th>
            <th class="text-center">No</th>
            <th class="text-center">No Aplica</th>
            <th class="text-center">Parcialmente</th>
            <th class="text-center">En Implementacion</th>
            <th class="text-center">A Requerirse</th>
        </tr>
        @foreach($aspects as $aspect)
        <tr>
            <td>{{$aspect->name}}</td>
            @for ($i = 0; $i < 13; $i++)
            <td>0</td>
            @endfor
        </tr>
        @endforeach
    </thead>
</table>-->
@stop