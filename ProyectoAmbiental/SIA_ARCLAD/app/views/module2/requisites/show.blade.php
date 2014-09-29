<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Show Requisite
@stop

@section('content')
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalles de {{$requisite->norm}} {{$requisite->norm_number}}</div>
    <div class="panel-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        <p>A continuacion se muestra detalladamente el requisito legal seleccionado:</p>
    </div>
    <div class="row">
        <div class="col-md-9">
            <table class="table table-responsive">
                <tr>
                    <th>Año</th>
                    <td>{{$requisite->year}}</td>
                </tr>
                <tr>
                    <th>Mes</th>
                    <td>{{$requisite->month}}</td>
                </tr>
                <tr>
                    <th>Norma</th>
                    <td>{{$requisite->norm}}</td>
                </tr>
                <tr>
                    <th>Numereo de norma</th>
                    <td>{{$requisite->norm_number}}</td>
                </tr>
                <tr>
                    <th>Articulo</th>
                    <td>{{$requisite->article}}</td>
                </tr>
                <tr>
                    <th>Modificaciones</th>
                    <td>{{$requisite->modifications}}</td>
                </tr>
                <tr>
                    <th>Degoraciones</th>
                    <td>{{$requisite->repeals}}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>{{$requisite->state}}</td>
                </tr>
                <tr>
                    <th>Aspecto Asociado</th>
                    <td>{{$requisite->aspect_associate}}</td>
                </tr>
            </table><!-- Table -->
            
            <a class="btn btn-info" href="{{URL::to('requisites/'.$requisite->id.'/edit')}}"><span class="glyphicon glyphicon-edit"></span> Editar</a>
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
                        Esta Realmente seguro de Eliminar la reserva realizada por
                    </p>
                </div>
                <div class="modal-footer">
                    {{Form::open(array('url' => 'requisites/'.$requisite->id,'class'=>'form-inline')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {{ Form::submit('Confirmar',array('class'=>'btn btn-danger')) }}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
