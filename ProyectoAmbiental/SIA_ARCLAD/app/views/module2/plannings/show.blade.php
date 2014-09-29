<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
Show Planning
@stop

@section('content')
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalles de Planeacion</div>
    <div class="panel-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{Session::get('message')}}
        </div>
        @endif
        <p>A continuacion se muestra detalladamente la planeacion seleccionada:</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table">
                <tr>
                    <th>Actividades Requeridas</th>
                    <td>{{$planning->required_activities}}</td>
                </tr>
                <tr>
                    <th>Responsable</th>
                    <td>{{$planning->responsible}}</td>
                </tr>
                <tr>
                    <th>Plazo</th>
                    <td>{{$planning->term}}</td>
                </tr>
                <tr>
                    <th>Recursos Necesarios</th>
                    <td>{{$planning->resources}}</td>
                </tr>
                <tr>
                    <th>Seguimiento</th>
                    <td>{{$planning->monitoring}}</td>
                </tr>
                <tr>
                    <th>Cumplimiento</th>
                    <td>{{$planning->plan_status}}</td>
                </tr>
            </table><!-- Table -->
        </div>
    </div>
    

</div>
@stop

@section('menulateral')
@include('includes.planningsidebar')
@stop