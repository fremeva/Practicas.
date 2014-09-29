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
    {{Session::get('message')}}
    @endif
    <h1>Lista de Los Planes de Cumplimiento</h1>
        <p>Planes de cumplimiento de cada una de las leyes aplicables o no para la empresa:</p>

        {{HTML::ul($plannings)}}
@stop

@section('Toggle_nav')
    <a href="#" class="list-group-item active">Listar Planeaciones</a>
    <a href="#" class="list-group-item">Nueva Planeacion</a>
@stop

