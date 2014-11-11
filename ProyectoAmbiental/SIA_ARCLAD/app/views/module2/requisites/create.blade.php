<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Crear Requisito.
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

<h2>Crear un Requisito</h2>

{{ Form::open(array('url' => 'requisites','role'=>'form')) }}
<div class="form-group">
    {{Form::label('year', 'Año:')}}
    {{Form::selectYear('year',1900, 2020,Input::old('year'),array('class' => 'form-control'))}}
    
</div>
<div class="form-group">
    {{Form::label('month', 'Mes:')}}
    {{Form::select('month',
            array('Enero'=>'Enero',
                  'Febrero'=>'Febrero',
                  'Marzo'=>'Marzo',
                  'Abril'=>'Abril',
                  'Mayo'=>'Mayo',
                  'Junio'=>'Junio',
                  'Julio'=>'Julio',
                  'Agosto'=>'Agosto',
                  'Septiembre'=>'Septiembre',
                  'Octubre'=>'Octubre',
                  'Noviembre'=>'Noviembre',
                  'Diciembre'=>'Diciembre',
                  ),
            Input::old('month'),
            array('class'=>'form-control'))}}
</div>
<div class="form-group">
    {{Form::label('norm', 'Norma:')}}
    {{Form::select('norm',
            array('Acuerdo'=>'Acuerdo','Decreto'=>'Decreto','Decreto/Ley'=>'Decreto/Ley','Ley'=>'Ley','Resolucion'=>'Resolucion',),
            Input::old('norm'),
            array('class'=>'form-control'))}}
</div>
<div class="form-group">
    {{Form::label('norm_number', 'Numero de norma:')}}
    {{Form::text('norm_number',Input::old('norm_number'),array('class' => 'form-control'))}}
</div>

<div class="form-group">
    {{Form::label('article', '#Articulo:')}}
    {{Form::text('article',Input::old('article'),array('class' => 'form-control'))}}
</div>

<div class="form-group">
    {{Form::label('modifications', 'Modificaciones')}}
    {{Form::textarea('modifications',Input::old('modifications'), ['class' => 'form-control','size' => '30x5'])}}
</div>

<div class="form-group">
    {{Form::label('repeals', 'Degoraciones')}}
    {{Form::textarea('repeals',Input::old('repeals'), ['class' => 'form-control','size' => '30x5'])}}
</div>

<div class="form-group">
    {{Form::label('state', 'Estado:')}}
    {{Form::select('state',
            array('Vigente'=>'Vigente','Exequible'=>'Exequible'),
            Input::old('norm'),
            array('class'=>'form-control'))}}
</div>
<div class="form-group">
    {{Form::label('aspect_id', 'Aspecto Asociado:')}}
    
    <select class="form-control" name="aspect_id" value="{{(Input::old('aspect_id'))}}">
        @foreach($aspects as $aspect)
        <option value='{{$aspect->id}}'>{{$aspect->name}}</option>
       @endforeach
    </select>
</div>

{{Form::submit('Guardar',array('class'=>'btn btn-default'))}}
{{ Form::reset('Reset',array('class'=>'btn btn-default')) }}
<br /><br />
{{ Form::close() }}

@stop