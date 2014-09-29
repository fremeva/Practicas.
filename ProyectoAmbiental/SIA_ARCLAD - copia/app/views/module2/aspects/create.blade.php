<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Aspectos Asociados
@stop

@section('content')
    <h1>Crear un nuevo Aspecto</h1>
        {{HTML::ul($errors->all())}}
        
        {{ Form::open(array('url' => 'aspects','role'=>'form')) }}<br />
        <div class="form-group">
            {{Form::label('name', 'Nombre:')}}<br />
            {{Form::text('name',Input::old('name'),array('placeholder' => 'Nombre Completo', 'class' => 'form-control'))}}
        </div>
            {{Form::submit('Guardar',array('class'=>'btn btn-susses'))}}
        
        {{ Form::close() }}
        
@stop

@section('Toggle_nav')
    <a href="#" class="list-group-item">Lista Aspecto</a>
    <a href="#" class="list-group-item active">Nuevo Aspecto</a>
@stop

