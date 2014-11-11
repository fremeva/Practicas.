<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Editar Requisito.
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

        <h2>Editar Requisito</h2>

        {{ Form::model($requisite,array('route' => array('requisites.update',$requisite->id),'role'=>'form','method'=>'PUT')) }}
        <div class="form-group">
            {{Form::label('year', 'Año:')}}
            {{Form::text('year',null,array('placeholder'=>'19..','class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('month', 'Mes:')}}
            {{Form::text('month',null,array('placeholder'=>'Enero/Febrero/...','class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('norm', 'Norma:')}}
            {{Form::select('norm',
            array('Acuerdo'=>'Acuerdo','Decreto'=>'Decreto','Decreto/Ley'=>'Decreto/Ley','Ley'=>'Ley','Resolucion'=>'Resolucion',),
            null,
            array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('norm_number', 'Numero de norma:')}}
            {{Form::text('norm_number',null,array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
            {{Form::label('article', '#Articulo:')}}
            {{Form::text('article',null,array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
            {{Form::label('modifications', 'Modificaciones')}}
            {{Form::textarea('modifications',null, ['class' => 'form-control','size' => '30x5'])}}
        </div>

        <div class="form-group">
            {{Form::label('repeals', 'Degoraciones')}}
            {{Form::textarea('repeals',null, ['class' => 'form-control','size' => '30x5'])}}
        </div>

        <div class="form-group">
            {{Form::label('state', 'Estado:')}}
            {{Form::select('state',
            array('Vigente'=>'Vigente','Exequible'=>'Exequible'),
            null,
            array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
    {{Form::label('aspect_id', 'Aspecto Asociado:')}}
    
    <select class="form-control" name="aspect_id" value="">
        @foreach($aspects as $aspect)
        @if($requisite->aspect_id == $aspect->id)
            <option value='{{$aspect->id}}' selected="selected">{{$aspect->name}}</option>
        @else
        <option value='{{$aspect->id}}'>{{$aspect->name}}</option>
        @endif
       @endforeach
    </select>
</div>
        
        {{Form::submit('Guardar',array('class'=>'btn btn-default'))}}
            <br /><br />
            {{ Form::close() }}
   
@stop