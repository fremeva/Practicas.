<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Show Requisite
@stop

@section('content')

<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
</ul>
<br /><br />


<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalles de {{$requisite->norm}} {{$requisite->norm_number}}</div>
    <div class="panel-body">
        <!-- Si existe un Mensaje de Session -->
        @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        <p>A continuacion se muestra detalladamente el requisito legal seleccionado:</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <!--Tabla de Detalles-->
            <table class="table">
                <tr>
                    <th>Año</th>
                    <td>{{$requisite->year}}</td>
                </tr>
                <tr>
                    <th>Mes</th>
                    <td>{{$requisite->month}}</td>
                </tr>
                <tr>
                    <th>Norma</th>
                    <td>{{$requisite->norm}}</td>
                </tr>
                <tr>
                    <th>Numereo de norma</th>
                    <td>{{$requisite->norm_number}}</td>
                </tr>
                <tr>
                    <th>Articulo</th>
                    <td>{{$requisite->article}}</td>
                </tr>
                <tr>
                    <th>Modificaciones</th>
                    <td>{{$requisite->modifications}}</td>
                </tr>
                <tr>
                    <th>Degoraciones</th>
                    <td>{{$requisite->repeals}}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>{{$requisite->state}}</td>
                </tr>
                <tr>
                    <th>Aspecto Asociado</th>
                    <td>{{$requisite->aspect->name}}</td>
                </tr>
            </table><!-- Table -->
            
            <a class="btn btn-info" href="{{URL::to('requisites/'.$requisite->id.'/edit')}}"><span class="glyphicon glyphicon-edit"></span> Editar</a>
            @if(is_null($requisite->evaluation))
                <a class="btn btn-info" href="{{URL::to('evaluations/create/'.$requisite->id)}}"><span class="glyphicon glyphicon-edit"></span>Crear Evaluacion</a>
            @else
                <a class="btn btn-info" href="{{URL::to('evaluations/'.$requisite->evaluation->id)}}"><span class="glyphicon glyphicon-edit"></span> Ver Evaluacion</a>
                @if(is_null($requisite->evaluation->planning))
                    <a class="btn btn-info" href="{{URL::to('plannings/create/'.$requisite->evaluation->id)}}"><span class="glyphicon glyphicon-edit"></span>Crear planeacion</a>
                @else
                    <a class="btn btn-info" href="{{URL::to('plannings/'.$requisite->evaluation->planning->id)}}"><span class="glyphicon glyphicon-edit"></span>Ver Planeacion</a>
                @endif
            @endif
            <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
        </div>
    </div>
</div>

<!-- Modal Javascript Boostrap -->
    <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">close</span>
                    </button>

                </div>
                <div class="modal-body">
                    <p>
                        Esta seguro de Eliminar Requisito Legal Seleccionado.
                    </p>
                </div>
                <div class="modal-footer">
                    {{Form::open(array('url' => 'requisites/'.$requisite->id,'class'=>'form-inline')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {{ Form::submit('Confirmar',array('class'=>'btn btn-danger')) }}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
