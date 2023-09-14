@extends('adminlte::page')
@section('title', 'Catastro')
@section('plugins.Datatables', true)


@section('content')
    <x-app-layout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form action="{{ route('catastro.upload') }}" method="POST" id="subir_form" enctype="multipart/form-data"
                        style="text-align: -webkit-center">
                        @csrf
                        <div class="row">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Tarifa:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="archivo" name="archivo"
                                        lang="es">
                                    <label class="custom-file-label" for="documentoTa">Escoger Archivo</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Tipos de Pliego:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="mb-3" style="text-align: start;">
                                    <select class="form-control" name="empresa_id" id="empresa_id" required>
                                        <option value="">-- Escoger una opción --</option>
                                        @foreach ($empresas as $pliego)
                                            <option value="{{ $pliego->id }}">{{ $pliego->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm text-center">
                            <div class="d-grid gap-2 col-6 mx-auto boton_ingreso">
                                <button class="btn btn-primary" type="submit" id="boton_ingresar"
                                    style="background: #212529">
                                    <span class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                    Ingresar Información
                                </button>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto cancelar">
                                <button class="btn btn-danger" type="button" id="boton_cancelar"
                                    style="background: #ab0a27">Cancelar Carga</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <div class="col-sm text-center">
                        <div class="barra_condiciones">
                            <div class="barra_azul" id="barra_estado">
                                <span class="barra_azul_span"></span>
                            </div>
                        </div>
                    </div>

                    <p id="response"></p>
                    <div style="text-align: -webkit-center">
                        <div id="contentLogs"
                            style="background-color: #FFFFFF; padding: 10px; margin: 10px; border: 1px solid #000000; text-align-last: left; font-size: 14px; display:none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Procesando Datos. </h5>
                    </div>
                    <div class="modal-body">
                        <p>Esto puedo tardar algunos minutos...
                        Espere que el este mensaje se cierre. </p>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>


@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/catastro.css') }}">
@stop

@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ url('js/catastro/index.js') }}"></script>


    <script type="text/javascript">
        $(document).on('change', 'input[type="file"]', function(event) {
            var filename = $(this).val();
            if (filename == undefined || filename == "") {
                $(this).next('.custom-file-label').html('No file chosen');
            } else {
                $(this).next('.custom-file-label').html(event.target.files[0].name);
            }
        });
    </script>

@stop
