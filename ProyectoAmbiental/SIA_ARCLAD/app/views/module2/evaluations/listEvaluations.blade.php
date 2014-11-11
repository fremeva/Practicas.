<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Evaluaciones
@stop

@section('content')

@if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
            </div>
@endif
    <h1>Evaluaciones de los Requisitos</h1>
        <p>Evaluacion de cada una de las leyes aplicables o no para la empresa:</p>
        
        <table class="table">
            <thead>
            <tr>
                <th>Aplicacion</th>
                <th>Aplicacion Especifica</th>
                <th>Cumplimiento</th>
                <th>Fecha Limite</th>
                <th>Informacion de Cumplimiento</th>
                <th>Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            @foreach($evaluations as $evaluation)
            <tr>
                <td>{{$evaluation->application}}</td>
                <td>{{$evaluation->specific_application}}</td>
                <td>{{$evaluation->compliance}}</td>
                <td>{{$evaluation->deadline}}</td>
                <td>{{$evaluation->information_compliance}}</td>
                <td>
                    <a href="{{URL::to('evaluations/'.$evaluation->id)}}" type="button" class="btn btn-info" ><span class="glyphicon glyphicon-info-sign"></span> info</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table> 
@stop


