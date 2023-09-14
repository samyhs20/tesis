<form id="form2">
    <div class="row">
        <div class="col-sm-2" style="text-align: right;">
            <label for="exampleInputEmail1" class="form-label">Tipos de Pliego:</label>
        </div>
        <div class="col-sm-8">
            <div class="mb-3" style="text-align: start;">
                <select class="form-control" name="select-pliegos" id="select-pliegos" required>
                    <option value="">-- Escoja una opción --</option>
                    @foreach ($pliegos as $pliego)
                        <option value="{{ $pliego->id }}">{{ $pliego->descripcion }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm text-center">
        <button type="button" id="btnverificar" class="btn btn-primary" style="background: #212529 ">Buscar</button>
        <h1>__________________________________________________________________________________________________</h1>
    </div>

    <div id = "check-my" style="display: block; margin:10px;text-align: center; font-weight: 700" >
        Tabla de Alumbrado Publico
        <input type="checkbox" id="myCheck" onclick="myFunction()">
    </div>


    <div id="tabla_general" style="display:none">
        <table id="table_tarifas" class="display nowrap" style="width:100%" >
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
    <div id="tabla_general_ap" style="display:none">
        <table id="table_tarifas_ap" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Tarifa </th>
                    <th>Descripción </th>
                    <th>Validación </th>
                    <th>Nivel Voltaje</th>
                    <th>Comercialización</th>
                    <th>Demanda</th>
                    <th>Rango Energía 1</th>
                    <th>Rango Energía 2</th>
                    <th>Rango Energía 3</th>
                    <th>Rango Energía 4</th>
                    <th>Rango Energía 5</th>
                    <th>Rango Energía 6</th>
                    <th>Rango Energía 7</th>
                    <th>Rango Energía 8</th>
                    <th>Rango Energía 9</th>
                    <th>Rango Energía 10</th>
                    <th>Rango Energía 11</th>
                    <th>Rango Energía 12</th>
                    <th>Rango Energía 13</th>
                    <th>Rango Energía 14</th>
                    <th>Rango Energía 15</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</form>
<!---MODAL DE BORRADO -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="#exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h1 class="cabecera" style="font-size: 20px; font-weight: 600">Borrar Registro</h1>
          <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>-->
        </div>
        <div class="modal-body" id="modalDelete">
            <div class="col-md"></div>
            <div class="col-md"> 
              <p>¿Seguro que desea borrar el Registro?</p>
            </div>
            <div class="col-md"></div>
         </div>
        <div class="modal-footer">
          <button type="button" id="btndelete" class="btn btn-danger " data-dismiss="modal">Borrar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>


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
