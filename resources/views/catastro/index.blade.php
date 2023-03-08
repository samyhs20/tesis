@extends('adminlte::page')
@section('title', 'Catastro')
@section('plugins.Datatables', true)


@section('content_header')

@stop

@section('content')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 " style="text-align: center;">
                <form action="{{ route('catastro.upload') }}" method="POST" id="subir_form" enctype="multipart/form-data"
                    style="text-align: -webkit-center">
                    @csrf
                    <h3 class="mt-3 text-center">Subir Informacion de las Empresas Distribuidoras</h3>
                    <br>
                    <div class="row">
                        <div class="col-sm-2" style="text-align: right;">
                            <label for="exampleInputEmail1" class="form-label">Tarifa:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <label for="">Seleccionar el Archivo a Cargar</label>
                                <input type="file" class="custom-file-input" id="archivo" name="archivo"
                                    lang="es">
                                <label class="custom-file-label" for="archivo">Escoge Archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="barra_condiciones">
                        <div class="barra_azul" id="barra_estado">
                            <span class="barra_azul_span"></span>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto boton_ingreso">
                        <button class="btn btn-primary" type="submit" id="boton_ingresar">Ingresar Informacion</button>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto boton_ingreso">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            id="procesamiento">
                            Procesar Informacion
                        </button>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto cancelar">
                        <button class="btn btn-danger" type="button" id="boton_cancelar">Cancelar Carga</button>
                    </div>
                </form>
                <p id="response"></p>
                <div style="text-align: -webkit-center">
                    <div id="contentLogs"
                        style="
                background-color: #FFFFFF;
                padding: 10px;
                margin: 10px;
                width: 70%;
                border: 1px solid #CCCCCC;
                text-align-last: left;
                font-size: 14px">
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <!-- spinner -->
                        <div id="loading" class="ocultar centrar_gif">
                            <img src="{{ url('/images/gif_agencia.gif') }}" alt="Cargando...">
                            <p class="text_blank t_s-15">Un momento....</p>
                        </div>

                        <div class="modal-content" id="ventana_modal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingreso de la empresa</h5>
                                <button type="button" class="close" id=close data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="archivo_procesar.php" method="POST" id="send_empresa" onsubmit="modal_espera()">
                                <div class="modal-body">
                                    <p>Escoja la empresa Distribuidora</p>
                                    <select name="empresa_id" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option selected>Seleccione</option>
                                        <option value="1">Empresa Quito</option>
                                        <option value="2">Empresa Guayaqui</option>
                                        <option value="3">Centro Sur</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        id="close_letras">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Procesar</button>
                                </div>
                            </form>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


@stop

@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
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
