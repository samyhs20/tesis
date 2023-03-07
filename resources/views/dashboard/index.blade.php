@extends('adminlte::page')
@section('title', 'Inicio')



@section('content_header')

@stop

@section('content')
    <x-app-layout>
        <div class="py-12">


            <div class="row">
                <div class="col-4">
                    {{-- Loading --}}
                    <x-adminlte-small-box title="Loading" text="Loading data..." icon="fas fa-chart-bar" theme="info"
                        url="#" url-text="More info" loading />
                </div>

                <div class="col-4">
                    {{-- Themes --}}
                    <x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark" theme="teal"
                        url="#" url-text="View details" />
                </div>
                <div class="col-4">

                    {{-- Updatable --}}
                    <x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark" theme="danger"
                        url="#" url-text="Reputation history" id="sbUpdatable" />
                </div>
            </div>

            <br /><br /><br />

            <x-adminlte-progress />

            {{-- themes --}}
            <x-adminlte-progress theme="light" value=55 />
            <x-adminlte-progress theme="dark" value=30 />
            <x-adminlte-progress theme="primary" value=95 />
            <x-adminlte-progress theme="secondary" value=40 />
            <x-adminlte-progress theme="info" value=85 />
            <x-adminlte-progress theme="warning" value=25 />
            <x-adminlte-progress theme="danger" value=50 />
            <x-adminlte-progress theme="success" value=75 />
            <br /><br />
            {{-- Custom --}}
            <x-adminlte-progress theme="teal" value=75 animated />
            <x-adminlte-progress size="sm" theme="indigo" value=85 animated />
            <x-adminlte-progress theme="pink" value=50 animated with-label />
            <br /><br />
            {{-- Vertical --}}
            <x-adminlte-progress theme="purple" value=40 vertical />
            <x-adminlte-progress theme="orange" value=80 vertical animated />
            <x-adminlte-progress theme="navy" value=70 vertical striped with-label />
            <x-adminlte-progress theme="lime" size="xxs" value=90 vertical />
            <br /><br />
            {{-- Dinamic Change --}}
            <x-adminlte-progress id="pbDinamic" value="5" theme="lighblue" animated with-label />
            {{-- Update the previous progress bar every 2 seconds, incrementing by 10% each step --}}


        </div>
        </div>
    </x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {

            let pBar = new _AdminLTE_Progress('pbDinamic');

            let inc = (val) => {
                let v = pBar.getValue() + val;
                return v > 100 ? 0 : v;
            };

            setInterval(() => pBar.setValue(inc(10)), 2000);
        })
    </script>
    <script>
        $(document).ready(function() {

            let sBox = new _AdminLTE_SmallBox('sbUpdatable');

            let updateBox = () => {
                // Stop loading animation.
                sBox.toggleLoading();

                // Update data.
                let rep = Math.floor(1000 * Math.random());
                let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
                let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
                let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
                let url = ['url1', 'url2', 'url3'][idx];

                let data = {
                    text,
                    title: rep,
                    icon,
                    url
                };
                sBox.update(data);
            };

            let startUpdateProcedure = () => {
                // Simulate loading procedure.
                sBox.toggleLoading();

                // Wait and update the data.
                setTimeout(updateBox, 2000);
            };

            setInterval(startUpdateProcedure, 10000);
        })
    </script>
@stop
