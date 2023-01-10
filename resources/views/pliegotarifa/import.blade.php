@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form id="form-import" action="{{ route('pliego.import') }}" method="post" enctype="multipart/form-data"   >
                        @csrf
                        <div class="row">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Empresa:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="mb-3" style="text-align: start;">
                                    <x-text-input id="descripcion" class="block mt-1 w-full" type="text"
                                        name="descripcion" :value="old('descripcion')" required />
                                    <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Tarifa:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="documentoTa" name="documentoTa" lang="es">
                                    <label class="custom-file-label" for="documentoTa">Escoge Archivo</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Alumbrado Publico:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="documentoAc" name="documentoAc" lang="es">
                                    <label class="custom-file-label" for="documentoAc">Escoge Archivo</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md" style="margin-top: 20px; text-align: center;">
                            <button class="btn btn-primary" tyoe="submit">Importar</button>
                        </div>
                    </form>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="tabla_general" style="display:block">
            <table id="table_tarifas" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Tarifa </th>
                        <th>Descripción </th>
                        <th>Categoria</th>
                        <th>Validación </th>
                        <th>Nivel Voltaje</th>
                        <th>Comercialización</th>
                        <th>Demanda</th>
                        <th>Cargo Energía 1</th>
                        <th>Cargo Energía 2</th>
                        <th>Cargo Energía 3</th>
                        <th>Cargo Energía 4</th>
                        <th>Cargo Energía 5</th>
                        <th>Cargo Energía 6</th>
                        <th>Cargo Energía 7</th>
                        <th>Cargo Energía 8</th>
                        <th>Cargo Energía 9</th>
                        <th>Cargo Energía 10</th>
                        <th>Cargo Energía 11</th>
                        <th>Cargo Energía 12</th>
                        <th>Cargo Energía 13</th>
                        <th>Cargo Energía 14</th>
                        <th>Cargo Energía 15</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </x-app-layout>
@stop



@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estilos.css') }}">

@stop
@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
