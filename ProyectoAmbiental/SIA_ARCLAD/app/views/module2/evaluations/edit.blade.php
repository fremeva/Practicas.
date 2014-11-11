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
</ul>
<br /><br />

@if (Session::has('message'))
@endif

        <h2>Editar Evaluacion</h2>

        {{ Form::model($evaluation,array('route' => array('evaluations.update',$evaluation->id),'role'=>'form','method'=>'PUT')) }}
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
            null,
            array('class'=>'form-control'))}}
        </div>

        <div class="form-group">
            {{Form::label('specific_application', 'Aplicacion Especifica')}}
            {{Form::textarea('specific_application',null, ['class' => 'form-control','size' => '20x10'])}}
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
            null,
            array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('information_compliance', 'Informacion de Cumplimiento')}}
            {{Form::textarea('information_compliance',null, ['class' => 'form-control','size' => '20x10'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('deadline', 'Fecha Limite')}}
            {{Form::text('deadline',null,array('placeholder'=>'Fecha Limite','class' => 'form-control'))}}
        </div>
        
        {{Form::submit('Guardar',array('class'=>'btn btn-default'))}}
            <br /><br />
            {{ Form::close() }}
   
@stop

