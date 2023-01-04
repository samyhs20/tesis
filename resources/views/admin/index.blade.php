@extends('adminlte::page')
@section('title', 'Inicio')



@section('content_header')
    
@stop

@section('content')
<x-app-layout>
    <div class="py-12">
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 " style="text-align: center;">

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="text-align: -webkit-center;">
            <img src="{{url('images/logo_agencia.png')}}" style="width: 400px">
            <div style="margin:70px"></div>
            <div style="font-size: 55px;  font-weight: 800;  color:#17a2b8"> Bienvenido</div>
             <div style="margin:30px"></div>
            <div style="font-size: 55px;  font-weight: 800;  color:#dc3545"> Sistema de Control Tarifario y Facturación</div>
            <div style="margin:50px"></div>
           
    </div>

</div>
    </div>
</x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop