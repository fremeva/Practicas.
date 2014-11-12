<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Show Evaluations
@stop

@section('content')

<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
  <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
</ul>
<br /><br />

<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalles de Evaluacion</div>
    <div class="panel-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        <p>A continuacion se muestra detalladamente la evaluacion seleccionada:</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table">
                <tr>
                    <th>Aplicacion</th>
                    <td>{{$evaluation->application}}</td>
                </tr>
                <tr>
                    <th>Aplicacion Especifica</th>
                    <td>{{$evaluation->specific_application}}</td>
                </tr>
                <tr>
                    <th>Cumplimiento</th>
                    <td>{{$evaluation->compliance}}</td>
                </tr>
                <tr>
                    <th>Fecha Limite</th>
                    <td>{{$evaluation->deadline}}</td>
                </tr>
                <tr>
                    <th>Informacion de Cumplimiento</th>
                    <td>{{$evaluation->information_compliance}}</td>
                </tr>
                
            </table><!-- Table -->
            
            <a class="btn btn-info" href="{{URL::to('evaluations/'.$evaluation->id.'/edit')}}"><span class="glyphicon glyphicon-edit"></span> Editar</a>
            <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
            
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
                        Esta seguro de Eliminar la Evaluacion.
                    </p>
                </div>
                <div class="modal-footer">
                    {{Form::open(array('url' => 'evaluations/'.$evaluation->id,'class'=>'form-inline')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {{ Form::submit('Confirmar',array('class'=>'btn btn-danger')) }}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
