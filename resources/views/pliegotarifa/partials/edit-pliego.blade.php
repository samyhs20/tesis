<!--- SECCION DE EDICION DEL PLIEGO TARIFARIO ---->
<div id="edicion" style="display:none">
    <div class="col-md" style="font-size: 25px;text-align: center; font-weight: 700"> EDITAR REGISTRO
    </div>

    <form id="saveUpdate">
        @csrf
        <div class="mb-3 row">
            <label for="addEmailField" class="col-md-3 form-label">Tarifa</label>
            <div class="col-md-9">
                <select class="form-control" name="tarifa" id="tarifa" required>
                    @foreach ($tarifas as $tarifa)
                        <option value="{{ $tarifa->id }}">{{ $tarifa->codigo }}:
                            {{ $tarifa->descripcion }} 
                            ( 
                                {{$tarifa->codigo_tarifa}} )</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="addCityField" class=" form-label">Categoria</label>
            </div>
            <div class="col-md-3">

                <select class="form-control" name="categoria" id="categoria" required>
                    <option value="Demanda">Demanda</option>
                    <option value="Demanda1">Demanda1</option>
                    <option value="Demanda2">Demanda2</option>
                    <option value="NAA">NAA</option>
                    <option value="NA">NA</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class=" row overflow-auto" style="max-height: 270px">
            <div class="col-md-6">
                <p style="font-size: 18px;text-align: center; font-weight: 700">TARIFA</p>
                <div class="row">
                    <div class="col-md">
                        <label for="addCityField" class="col-md-3 form-label">Validación </label>
                    </div>
                    <div class="col-md">
                        <select class="form-control" name="validacion" id="validacion" required>
                            <option value=" ">No tiene validacion</option>
                            <option value="Validacion 1">Validación 1</option>
                            <option value="Validacion 2">Validación 2</option>
                            <option value="Validacion 3">Validación 3</option>
                            <option value="Validacion 4">Validación 4</option>
                            <option value="Validacion 5">Validación 5</option>
                            <option value="Validacion 6">Validación 6</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Nivel Voltaje</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="nivel_voltaje" id="nivel_voltaje"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Comercial</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="comercial" id="comercial" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Demanda</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="demanda" id="demanda" value=" " />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 1</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_1" id="cargo_energia_1"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 2</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_2" id="cargo_energia_2"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 3</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_3" id="cargo_energia_3"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 4</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_4" id="cargo_energia_4"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 5</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_5" id="cargo_energia_5"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 6</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_6" id="cargo_energia_6"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 7</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_7" id="cargo_energia_7"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 8</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_8" id="cargo_energia_8"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 9</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_9" id="cargo_energia_9"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 10</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_10" id="cargo_energia_10"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 11</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_11" id="cargo_energia_11"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 12</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_12" id="cargo_energia_12"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 13</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_13" id="cargo_energia_13"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 14</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_14" id="cargo_energia_14"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Cargo Energía 15</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="cargo_energia_15" id="cargo_energia_15"
                            value=" " />
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-left: 2px solid">
                <p style="font-size: 18px;text-align: center; font-weight: 700">ALUMBRADO PUBLICO</p>

                <div class="row">
                    <div class="col-md">
                        <label for="addCityField" class="col-md-3 form-label">Validación AP </label>
                    </div>
                    <div class="col-md">
                        <select class="form-control" name="validacion_ap" id="validacion_ap" required>
                            <option value="">Sin Validación</option>
                            <option value="NAA">NAA</option>
                            <option value="Validacion 1">Validación 1</option>
                            <option value="Validacion 2">Validación 2</option>
                            <option value="Validacion 3">Validación 3</option>
                            <option value="Validacion 4">Validación 4</option>
                            <option value="Validacion 5">Validación 5</option>
                            <option value="Validacion 6">Validación 6</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addCityField" class="form-label">Nivel Voltaje</label>
                    </div>
                    <div class="col-md">
                        <select class="form-control" name="nivel_ap" id="nivel_ap" required>
                            <option value="Alta">Alta</option>
                            <option value="Media">Media</option>
                            <option value="Baja">Baja</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class=" form-label">Comercial</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="comercial_ap" id="comercial_ap"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Demanda</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="demanda_ap" id="demanda_ap"
                            value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 1</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_1" id="rango_1" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 2</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_2" id="rango_2" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 3</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_3" id="rango_3" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 4</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_4" id="rango_4" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 5</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_5" id="rango_5" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 6</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_6" id="rango_6" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 7</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_7" id="rango_7" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 8</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_8" id="rango_8" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 9</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_9" id="rango_9" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 10</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_10" id="rango_10" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 11</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_11" id="rango_11" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 12</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_12" id="rango_12" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 13</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_13" id="rango_13" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 14</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_14" id="rango_14" value=" " />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="addmonto" class="form-label">Rango Energía 15</label>
                    </div>
                    <div class="col-md">
                        <input type="inputId" class="form-control" name="rango_15" id="rango_15" value=" " />
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="row">
        <div class="col-md" style="text-align: right;">
            <button id="regresar" type="button" class="btn btn-primary" style="background: #dc3545"> Regresar</button>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md" style="text-align: left;">
            <button type="button" id="btnsave" class="btn  btn-secondary "style="background: #17a2b8" >Guardar</button>
        </div>
    </div>
</div>

