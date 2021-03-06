<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Show Planning
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
    <div class="panel-heading">Detalles de Planeacion</div>
    <div class="panel-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        <p>A continuacion se muestra detalladamente la planeacion seleccionada:</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table">
                <tr>
                    <th>Actividades Requeridas</th>
                    <td>{{$planning->required_activities}}</td>
                </tr>
                <tr>
                    <th>Responsable</th>
                    <td>{{$planning->responsible}}</td>
                </tr>
                <tr>
                    <th>Plazo</th>
                    <td>{{$planning->term}}</td>
                </tr>
                <tr>
                    <th>Recursos Necesarios</th>
                    <td>{{$planning->resources}}</td>
                </tr>
                <tr>
                    <th>Seguimiento</th>
                    <td>{{$planning->monitoring}}</td>
                </tr>
                <tr>
                    <th>Cumplimiento</th>
                    <td>{{$planning->plan_status}}</td>
                </tr>
            </table><!-- Table -->
            
            <a class="btn btn-default" href="{{URL::to('plannings/'.$planning->id.'/edit')}}"><i class="fa fa-pencil"></i> Editar</a>
            <a class="btn btn-default" href="{{URL::to('evaluations/'.$planning->evaluation_id)}}"><i class="fa fa-ellipsis-h"></i> Ver Evaluacion</a>
            <a class="btn btn-default" href="{{URL::to('requisites/'.$planning->evaluation->requisite_id)}}"><i class="fa fa-tag"></i> Ver Requisito</a>
            <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
            <br /><br />
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
                        <strong><span class="text-warning">Esta seguro de Eliminar la Planeacion.</span></strong>
                    </p>
                </div>
                <div class="modal-footer">
                    {{Form::open(array('url' => 'plannings/'.$planning->id,'class'=>'form-inline')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {{ Form::submit('Confirmar',array('class'=>'btn btn-danger')) }}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
