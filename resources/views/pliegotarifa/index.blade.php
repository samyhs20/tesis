@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    @include('pliegotarifa.partials.table-pliego')
                    @include('pliegotarifa.partials.edit-pliego')
                </div>
            </div>
        </div>
    </x-app-layout>
@stop


@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css" />

@stop
@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="{{url('js/pliego/table.js')}}">
     
    </script>

@stop
