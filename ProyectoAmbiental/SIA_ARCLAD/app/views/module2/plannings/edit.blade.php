<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Editar Planeacion.
@stop

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
  <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
</ul>
<br /><br />
@if (Session::has('message'))
@endif

        <h2>Editar Planeacion</h2>

        {{ Form::model($planning,array('route' => array('plannings.update',$planning->id),'role'=>'form','method'=>'PUT')) }}
        <div class="form-group">
            {{Form::label('required_activities', 'Actividades Requeridas')}}
            {{Form::textarea('required_activities',null, ['class' => 'form-control','size' => '20x10','required'=>'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('responsible', 'Responsable:')}}
            {{Form::text('responsible',null,array('placeholder'=>'Responsable','class' => 'form-control','required'=>'required'))}}
        </div>
        <div class="form-group">
            {{Form::label('term', 'Plazo')}}
            {{Form::text('term',null,array('placeholder'=>'Plazo','class' => 'form-control','required'=>'required'))}}
        </div>

        <div class="form-group">
            {{Form::label('resources', 'Recursos Necesarios')}}
            {{Form::textarea('resources',null, ['class' => 'form-control','size' => '20x10'])}}
        </div>
        <div class="form-group">
            {{Form::label('monitoring', 'Seguimiento')}}
            {{Form::textarea('monitoring',null, ['class' => 'form-control','size' => '20x10'])}}
        </div>

        <div class="form-group">
            {{Form::label('plan_status', 'Estado del Plan:')}}
            {{Form::select('plan_status',
            array('Ejecutada'=>'Ejecutada','Continua'=>'Continua','En Ejecucion'=>'En Ejecucion','Pendiente'=>'Pendiente'),
            Input::old('norm'),
            array('class'=>'form-control','required'=>'required'))}}
        </div>        
        {{Form::submit('Guardar',array('class'=>'btn btn-success'))}}
        {{ Form::reset('Reset',array('class'=>'btn btn-default')) }}
            <br /><br />
            {{ Form::close() }}
   
@stop
