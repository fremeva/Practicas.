<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Crear Evaluacion.
@stop

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
</ul>
<br /><br />
@if (Session::has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    {{Session::get('message')}}
</div>
@endif

<h2>Crear Evaluacion del requisito</h2>

{{ Form::open(array('url' => 'evaluations','role'=>'form')) }}
        <div class="form-group">
            {{Form::label('application', 'Aplicacion:')}}
            {{Form::select('application',
            array('Si'=>'Si',
                  'No'=>'No',
                  'A Terceros'=>'A Terceros',
                  'Autoridades Ambientales'=>'Autoridades Ambientales',
                  'Gestores Ambientales'=>'Gestores Ambientales',
                  'Solo Informativa'=>'Solo Informativa',
                  'Proveedores'=>'Proveedores'
                 ),
            Input::old('application'),
            array('class'=>'form-control'))}}
        </div>

        <div class="form-group">
            {{Form::label('specific_application', 'Aplicacion Especifica')}}
            {{Form::textarea('specific_application',Input::old('specific_application'), ['class' => 'form-control','size' => '20x10'])}}
        </div>
        <div class="form-group">
            {{Form::label('compliance', 'Cumplimiento:')}}
            {{Form::select('compliance',
            array('Si'=>'Si',
                  'No'=>'No',
                  'A Requerirse'=>'A Requerirse',
                  'En Implementacion'=>'En Implementacion',
                  'No Aplica'=>'No Aplica',
                  'Parcialmente'=>'Parcialmente'
                 ),
            Input::old('compliance'),
            array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('information_compliance', 'Informacion de Cumplimiento')}}
            {{Form::textarea('information_compliance',Input::old('information_compliance'), ['class' => 'form-control','size' => '20x10'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('deadline', 'Fecha Limite')}}
            {{Form::text('deadline',Input::old('deadline'),array('placeholder'=>'Fecha Limite','class' => 'form-control'))}}
        </div>
        {{ Form::hidden('requisite_id', $id) }}
        
        {{Form::submit('Guardar',array('class'=>'btn btn-default'))}}
        {{ Form::reset('Reset',array('class'=>'btn btn-default')) }}
            <br /><br />
            
            {{ Form::close() }}
@stop
