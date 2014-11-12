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
    <!--Navegacion Interna-->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
        <li role="presentation"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
        <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
        <li role="presentation" class="pull-right"><a href="{{URL::to('requisites/create')}}">Nuevo Requisito</a></li>
    </ul>
    
    <h1>Aspectos Asociados</h1>
    
    <!--Formulario para Crear Un Nuevo Aspecto Asociado-->
    {{ Form::open(array('url' => 'aspects','role'=>'form','class'=>'form-inline')) }}<br />
    <div class="form-group">
        {{Form::label('name', 'Nuevo Aspecto Asociado:')}}
        {{Form::text('name',Input::old('name'),array('placeholder' => 'Nombre del Aspecto', 'class' => 'form-control', 'required'=>'required'))}}
        {{Form::submit('Crear',array('class'=>'btn btn-success'))}}
        {{Form::reset('Cancelar',array('class'=>'btn btn-default'))}}
    </div>
    {{ Form::close() }}
    <br />
    
    <!--Si Hay Un mensaje de session, Mostramos la Alerta.-->
    @if (Session::has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{Session::get('message')}}
    </div>
    @endif
    <!--Si Hay Un mensaje de Error en la Validacion, Mostramos la Alerta.-->
    @if($errors->has())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{$error}}<br>
        @endforeach
    </div>
    @endif

    <ul class="list-group">
        @foreach($aspects as $aspect)
        <li class="list-group-item">
            {{$aspect->name}}

            <button class="btn btn-warning pull-right btn-xs" data-toggle="modal" data-target="#myModal{{$aspect->id}}">
                <span class="glyphicon glyphicon-remove"></span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$aspect->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--Modal Header-->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
                        </div>
                        <!-- Modal Body-->
                        <div class="modal-body">
                            <p>Esta seguro que desea eliminar el aspecto <strong>{{$aspect->name}}<span class="text-warning"> CUIDADO QUE SE BORRARAN LOS REQUISITOS RELACIONADOS.</span></strong></p>
                        </div>
                        <!-- Modal Footer-->
                        <div class="modal-footer">
                            {{Form::open(array('url'=> 'aspects/'.$aspect->id,'class'=>'form-inline'))}}
                            {{Form::hidden('_method','DELETE')}}
                            <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            {{Form::submit('Confirmar',array('class'=>'btn btn-danger'))}}
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>    
        </li>
        @endforeach
    </ul>

@stop


