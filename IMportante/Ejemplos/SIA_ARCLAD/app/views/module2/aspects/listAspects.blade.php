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
    @if (Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <h1>Lista de Aspectos Asociados</h1>
    <p>Aspectos asociados de la empresa:</p>
    
    <ul class="list-group">
        @foreach($aspects as $aspect)
        <li class="list-group-item">
            {{$aspect->name}}
            <span type="button" class="btn btn-warning pull-right" data-toogle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-remove"></span></span>
        </li>
        
        @endforeach
</ul>
@stop
