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
            {{Form::label('aspect_associate', 'Aspecto Asociado:')}}
            {{Form::text('aspect_associate',null,array('placeholder'=>'Consumo de Energía','class' => 'form-control'))}}
        </div>
        
        {{Form::submit('Guardar',array('class'=>'btn btn-default'))}}
            <br /><br />
            {{ Form::close() }}
   
@stop