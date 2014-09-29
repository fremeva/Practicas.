<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.master')

@section('title')
    Aspectos Asociados
    <a href="../../../controllers/HomeController.php"></a>
    <a href="../plannings/listPlannings.blade.php"></a>
@stop

@section('content')
    @if (Session::has('message'))
    {{Session::get('message')}}
    @endif
    <h1>Lista de Aspectos Asociados</h1>
    <p>Aspectos asociados de la empresa:</p>

    {{HTML::ul($aspects)}}
@stop

@section('Toggle_nav')
    <a href="#" class="list-group-item active">Lista Aspecto</a>
    <a href="#" class="list-group-item">Nuevo Aspecto</a>
@stop
