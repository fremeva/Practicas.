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
    {{Session::get('message')}}
    @endif
    <h1>Lista de Evaluaciones en la empresa</h1>
        <p>Evaluaciones a cada una de las leyes ambientales para la empresa:</p>

        {{HTML::ul($evaluations)}}
@stop

@section('Toggle_nav')
    <a href="#" class="list-group-item active">Listar Evaluaciones</a>
    <a href="#" class="list-group-item">Nueva Evaluacion</a>
@stop
