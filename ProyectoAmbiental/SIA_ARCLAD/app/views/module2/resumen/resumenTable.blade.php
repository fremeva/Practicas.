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
</ul><br />
@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
</div>
@endif

<ul class="nav nav-pills pull-right">
  <li role="presentation" class="active"><a href="{{URL::to('resumentable')}}">Tabla Completa</a></li>
  <li role="presentation"><a href="{{URL::to('resumenxaplicacion')}}">Detalle Aplicacion</a></li>
  <li role="presentation"><a href="{{URL::to('resumenxcumplimiento')}}">Detalle Cumplimiento</a></li>
</ul>

<h1>Resumen</h1>
<p>A continuacion se muestra el resumen de acuerdo a los aspectos asociados que cumplen o no cumplen en la empresa:</p>
<table class="table table-striped table-bordered text-center">
    <thead>
        <tr>
            <th rowspan="2" class="text-center">Aspectos Asociado</th>
            <th colspan="7" class="text-center">Aplicacion</th>
            <th colspan="6" class="text-center">Cumplimiento</th>
        </tr>
        <tr>
            <th class="text-center">Si</th>
            <th class="text-center">No</th>
            <th class="text-center">A Terceros</th>
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
        </thead>
        <tbody>
        <?php $indice = 0?>
        @foreach($aspects as $aspect)
        <tr>
            <td>{{$aspect->name}}</td>
            <td>{{$applicationMatriz[$indice]["Si"]}}</td>
            <td>{{$applicationMatriz[$indice]["No"]}}</td>
            <td>{{$applicationMatriz[$indice]["A Terceros"]}}</td>
            <td>{{$applicationMatriz[$indice]["Autoridades Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Gestores Ambientales"]}}</td>
            <td>{{$applicationMatriz[$indice]["Solo Informativa"]}}</td>
            <td>{{$applicationMatriz[$indice]["Proveedores"]}}</td>
            
            <td>{{$complianceMatriz[$indice]["Si"]}}</td>
            <td>{{$complianceMatriz[$indice]["No"]}}</td>
            <td>{{$complianceMatriz[$indice]["No Aplica"]}}</td>
            <td>{{$complianceMatriz[$indice]["Parcialmente"]}}</td>
            <td>{{$complianceMatriz[$indice]["En Implementacion"]}}</td>
            <td>{{$complianceMatriz[$indice]["A Requerirse"]}}</td>
        </tr>
        <?php $indice++?>
        @endforeach
    </tbody>
</table>

@stop