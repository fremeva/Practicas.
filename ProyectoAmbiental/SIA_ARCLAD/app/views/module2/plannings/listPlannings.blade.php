<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Planeaciones
@stop

@section('content')
    @if (Session::has('message'))
<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{Session::get('message')}}
            </div>
@endif
    <h1>Planes de Cumplimiento</h1>
        <p>Planes de cumplimiento de cada una de las leyes aplicables o no para la empresa:</p>
<table class="table">
            <thead>
            <tr>
                <th>Actividades Requeridas</th>
                <th>Responsable</th>
                <th>Plazo</th>
                <th>Recursos Necesarios</th>
                <th>Seguimiento</th>
                <th>Cumplimiento</th>
                <th>Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            @foreach($plannings as $planning)
            <tr>
                <td>{{$planning->required_activities}}</td>
                <td>{{$planning->responsible}}</td>
                <td>{{$planning->term}}</td>
                <td>{{$planning->resources}}</td>
                <td>{{$planning->monitoring}}</td>
                <td>{{$planning->plan_status}}</td>
                <td>
                    <a href="{{URL::to('plannings/'.$planning->id)}}" type="button" class="btn btn-info" ><span class="glyphicon glyphicon-info-sign"></span> info</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>        
@stop
