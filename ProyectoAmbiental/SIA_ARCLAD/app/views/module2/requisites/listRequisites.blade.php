<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Requisitos
@stop

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="{{URL::to('aspects')}}">Aspectos Asociado</a></li>
  <li role="presentation" class="active"><a href="{{URL::to('requisites')}}">Requisitos Legales</a></li>
  <li role="presentation"><a href="{{URL::to('resumentable')}}">Ver Resumen</a></li>
</ul>
@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
            </div>
@endif
<h1>Requisitos Legales</h1>
<p>Los Requisitos legales del medio ambiente para la empresa: <span class="pull-right"><a href="{{URL::to('requisites/create')}}" class="btn btn-default">Nuevo Requisito</a></span></p><br /><br />
        <table class="table">
            <thead>
            <tr>
                <th>Norma</th>
                <th>Numero</th>
                <th>Articulo</th>
                <th>Aspecto Asociado</th>
                <th>Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            @foreach($requisites as $requisite)
            <tr>
                <td>{{$requisite->norm}}</td>
                <td>{{$requisite->norm_number}}</td>
                <td>{{$requisite->article}}</td>
                <td>{{$requisite->aspect->name}}</td>
                <td>
                    <a href="{{URL::to('requisites/'.$requisite->id)}}" type="button" class="btn btn-info" ><span class="glyphicon glyphicon-info-sign"></span> info</a>
                    @if(is_null($requisite->evaluation))
                    <span 
                        class="glyphicon glyphicon-warning-sign alert-warning pull-right alertaRequisite"
                        data-toggle="tooltip" data-placement="right"
                        title="EL Requisito le Falta Su Evaluacion y Planeacion."
                     ></span>
                    @elseif(is_null($requisite->evaluation->planning))
                    <span 
                        class="glyphicon glyphicon-warning-sign alert-warning pull-right alertaRequisite"
                        data-toggle="tooltip" data-placement="right"
                        title="EL Requisito le Falta Su Planeacion."
                     ></span>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

<script>
$(function () { 
    $("[data-toggle='tooltip']").tooltip()
});
</script>
@stop

