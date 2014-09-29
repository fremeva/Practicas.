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
    @if (Session::has('message'))
    {{Session::get('message')}}
    @endif
    <h1>Requisitos Legales de la empresa</h1>
        <p>Los Requisitos legales del medio ambiente para la empresa:</p>

        {{HTML::ul($requisites)}}
@stop

@section('Toggle_nav')
    <a href="#" class="list-group-item active">Listar Planeaciones</a>
    <a href="#" class="list-group-item">Nueva Planeacion</a>
@stop

@section('sesion_title')
REQUISITOS LEGALES
@stop