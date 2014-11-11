<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Usuarios
@stop

@section('content')    
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif

    <h3>Usuarios Actuales</h3>

    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">Listado</div>
        <div class="panel-body">
            <p>A continuacion se Muestran todos los usuarios registrado en nuestra Empresa:</p>
        </div>
        <div class="list-group">
            @foreach($users as $user)
            <a href="{{URL::to('user/'.$user->id)}}" class="list-group-item">
                <span class="glyphicon glyphicon-user"></span>  {{$user->full_name}}<span class="glyphicon glyphicon-eye-open pull-right"></span>
            </a>
            @endforeach 
        </div>

    </div>
       
@stop
