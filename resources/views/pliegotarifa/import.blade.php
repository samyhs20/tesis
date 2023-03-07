@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
    <x-app-layout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <form id="form-import" action="{{ route('pliego.import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-2" style="text-align: right;">
                                <label for="exampleInputEmail1" class="form-label">Tarifa:</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="documentoTa" name="documentoTa"
                                        lang="es">
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
                                    <input type="file" class="custom-file-input" id="documentoAc" name="documentoAc"
                                        lang="es">
                                    <label class="custom-file-label" for="documentoAc">Escoge Archivo</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md" style="margin-top: 20px; text-align: center;">
                            <button class="btn btn-primary" type="submit" style="background: #212529 ">Subir
                                Archivo</button>
                        </div>
                    </form>

                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                    <div class="row">
                        <div class="col-sm-2" style="text-align: right;">
                            <label for="exampleInputEmail1" class="form-label">Empresa:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="mb-3" style="text-align: start;">
                                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"
                                    :value="old('descripcion')" required />
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <div id="check-my" style="display: block; margin:10px;text-align: center; font-weight: 700">
                        Tabla de Alumbrado Publico
                        <input type="checkbox" id="myCheck" onclick="myFunction()">
                    </div>


                    <div id="tabla_general" style="display:block">
                        <table id="table_tarifas" class="display">
                            <thead>
                                <tr>
                                    @isset($headers)

                                        @foreach ($headers as $key)
                                            <th>{{ $key }}</th>
                                        @endforeach
                                    @endisset
                                </tr>
                            </thead>
                            <tbody>
                                @isset($records)
                                    @foreach ($records as $record)
                                        <tr>
                                            @foreach ($record as $key => $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                    <div id="tabla_general_ap" style="display:none">
                        <table id="table_tarifas_ap" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    @isset($headers_ap)

                                        @foreach ($headers_ap as $key)
                                            <th>{{ $key }}</th>
                                        @endforeach
                                    @endisset
                                </tr>
                            </thead>
                            <tbody>
                                @isset($records_ap)
                                    @foreach ($records_ap as $record)
                                        <tr>
                                            @foreach ($record as $key => $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>

                        </table>
                    </div>
                    <div class="col-md" style="margin-top: 20px; text-align: center;">
                        <button class="btn btn-primary" type="button" id="btn-import" style="background: #212529 ">
                            Guardar Datos
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>
@stop



@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/estilos.css') }}">


@stop
@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
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

    <script type="text/javascript">
        function myFunction() {
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            // Get the output text
            var tableAp = document.getElementById("tabla_general_ap");
            var table = document.getElementById("tabla_general");

            // If the checkbox is checked, display the output text
            if (checkBox.checked == true) {
                table.style.display = "none";
                tableAp.style.display = "block";
            } else {
                table.style.display = "block";
                tableAp.style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            var table = $("#table_tarifas").DataTable({
                scrollY: 350,
                scrollX: true,
                processing: true,
                destroy: true,
                lengthChange: false,
                language: {
                    search: 'Buscar:',
                    lengthMenu: "_MENU_",
                    zeroRecords: "No se ha encontrado",
                    info: "Página número _PAGE_ de _PAGES_",
                    infoEmpty: "No se ha encontrado registros",
                    infoFiltered: "(filtro máximo de _MAX_ total registros)",
                    paginate: {
                        first: "Primero",
                        previous: "Antes",
                        next: "Después",
                        last: "Último",
                    },
                },
            });
            var table_ap = $("#table_tarifas_ap").DataTable({
                scrollY: 350,
                scrollX: true,
                processing: true,
                destroy: true,
                lengthChange: false,
                language: {
                    search: 'Buscar:',
                    lengthMenu: "_MENU_",
                    zeroRecords: "No se ha encontrado",
                    info: "Página número _PAGE_ de _PAGES_",
                    infoEmpty: "No se ha encontrado registros",
                    infoFiltered: "(filtro máximo de _MAX_ total registros)",
                    paginate: {
                        first: "Primero",
                        previous: "Antes",
                        next: "Después",
                        last: "Último",
                    },
                },
            });

            $('#btn-import').on('click', function() {
                var data = table.rows().data().toArray();
                var data2 = table_ap.rows().data().toArray();
                sendData(jsonArray(data, data2));
            });

        });

        function sendData(data) {
            //console.log(data)
            var json = JSON.stringify(data)
            var empresa = $('#descripcion').val()
            $.ajax({
                // url: "{{ route('pliegos.find') }}",
                url: "../../api/pliego/save",
                method: "POST",
                data: {
                    data: json,
                    empresa:empresa
                },
                success: function(response) {
                    alert(response.msg);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        }

        function jsonArray(data, data2) {
            var json = {};
            for (var i = 0; i < data.length; i++) {
                json[i] = {};
                for (var j = 0; j < data2.length; j++) {
                    if (data[i][5] === data2[j][5]) {
                        json[i]['categoria'] = data[i][0]
                        json[i]['nivel_voltaje'] = data[i][1]
                        json[i]['nivel_voltaje_ap'] = data2[j][1]
                        json[i]['tarifa'] = data[i][5];
                        json[i]['validacion'] = data[i][6];
                        json[i]['validacion_ap'] = data2[j][6];
                        json[i]['demanda'] = data[i][7];
                        json[i]['demanda_ap'] = data2[j][7];
                        json[i]['comercializacion'] = data[i][8];
                        json[i]['comercializacion_ap'] = data2[j][8];
                        json[i]['cargo_1'] = data[i][9];
                        json[i]['cargo_2'] = data[i][10];
                        json[i]['cargo_3'] = data[i][11];
                        json[i]['cargo_4'] = data[i][12];
                        json[i]['cargo_5'] = data[i][13];
                        json[i]['cargo_6'] = data[i][14];
                        json[i]['cargo_7'] = data[i][15];
                        json[i]['cargo_8'] = data[i][16];
                        json[i]['cargo_9'] = data[i][17];
                        json[i]['cargo_10'] = data[i][18];
                        json[i]['cargo_11'] = data[i][19];
                        json[i]['cargo_12'] = data[i][20];
                        json[i]['cargo_13'] = data[i][21];
                        json[i]['cargo_14'] = data[i][22];
                        json[i]['rango_1'] = data2[j][9];
                        json[i]['rango_2'] = data2[j][10];
                        json[i]['rango_3'] = data2[j][11];
                        json[i]['rango_4'] = data2[j][12];
                        json[i]['rango_5'] = data2[j][13];
                        json[i]['rango_6'] = data2[j][14];
                        json[i]['rango_7'] = data2[j][15];
                        json[i]['rango_8'] = data2[j][16];
                        json[i]['rango_9'] = data2[j][17];
                        json[i]['rango_10'] = data2[j][18];
                        json[i]['rango_11'] = data2[j][19];
                        json[i]['rango_12'] = data2[j][20];
                        json[i]['rango_13'] = data2[j][21];
                        json[i]['rango_14'] = data2[j][22];
                        json[i]['rango_15'] = data2[j][23];
                    }
                }


            }
            return json;
        }
    </script>
    <script type="text/javascript">
        function myFunction() {
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            // Get the output text
            var tableAp = document.getElementById("tabla_general_ap");
            var table = document.getElementById("tabla_general");

            // If the checkbox is checked, display the output text
            if (checkBox.checked == true) {
                table.style.display = "none";
                tableAp.style.display = "block";
            } else {
                table.style.display = "block";
                tableAp.style.display = "none";
            }
        }
    </script>
@stop
