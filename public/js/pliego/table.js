$(document).ready(function () {
    //$("#btnverificar").click(listar);
    $("#btnverificar").click(function () {
        listar();

        // Muestra la tabla después de que se complete la solicitud AJAX
        $("#tabla_general").css("display", "block");
    });

});

$(document).on("click", "myFunction", function () {
    let checkBox = document.querySelector("#myCheck");
    let tableAp = document.querySelector("#tabla_general_ap");
    let table = document.querySelector("#tabla_general");
    if (checkBox.checked == true) {
        table.style.display = "none";
        tableAp.style.display = "block";
    } else {
        table.style.display = "block";
        tableAp.style.display = "none";
    }
});

function listar() {
    $.ajax({
        // url: "{{ route('pliegos.find') }}",
        url: "../api/pliegos",
        method: "post",
        data: $("#form2").serialize(),
        success: function (response) {
            console.log(response.data)
            $("#table_tarifas").DataTable({
                data: response.data,
                scrollY: 350,
                scrollX: true,
                processing: true,
                destroy: true,
                lengthChange: false,
                language: {
                    search: "FILTRAR", // Cambia el texto de búsqueda aquí
                    lengthMenu: "_MENU_",
                    zeroRecords: "No se ha encontrado",
                    info: "Página número _PAGE_ of _PAGES_",
                    infoEmpty: "No se ha encontrado registros",
                    infoFiltered: "(filtro máximo de _MAX_ total registros)",
                    paginate: {
                        first: "Primero",
                        previous: "Antes",
                        next: "Después",
                        last: "Último",
                    },
                    
                },
                columns: [
                    { data: "codigo" },
                    { data: "tarifa" },
                    { data: "descripcion" },
                    { data: "id_demanda" },
                    { data: "id_validacion" },
                    { data: "nivel_voltaje" },
                    { data: "comercial" },
                    { data: "demanda" },
                    { data: "cargo_energia1" },
                    { data: "cargo_energia2" },
                    { data: "cargo_energia3" },
                    { data: "cargo_energia4" },
                    { data: "cargo_energia5" },
                    { data: "cargo_energia6" },
                    { data: "cargo_energia7" },
                    { data: "cargo_energia8" },
                    { data: "cargo_energia9" },
                    { data: "cargo_energia10" },
                    { data: "cargo_energia11" },
                    { data: "cargo_energia12" },
                    { data: "cargo_energia13" },
                    { data: "cargo_energia14" },
                    { data: "cargo_energia15" },
                    { data: "action" },
                ],
            });
            $("#table_tarifas_ap").DataTable({
                data: response.data,
                scrollY: 350,
                scrollX: true,
                processing: true,
                destroy: true,
                lengthChange: false,
                language: {
                    search: "FILTRAR", // Cambia el texto de búsqueda aquí
                    lengthMenu: "Mostrar _MENU_ registros por página",
                    zeroRecords: "No se ha encontrado",
                    info: "Página número _PAGE_ of _PAGES_",
                    infoEmpty: "No se ha encontrado registros",
                    infoFiltered: "(filtro máximo de _MAX_ total registros)",
                    paginate: {
                        first: "Primero",
                        previous: "Antes",
                        next: "Después",
                        last: "Último",
                    },
                },
                columns: [
                    { data: "codigo" },
                    { data: "tarifa" },
                    { data: "descripcion" },
                    { data: "validacion_ap" },
                    { data: "nivel_voltaje_ap" },
                    { data: "comercial_ap" },
                    { data: "demanda_ap" },
                    { data: "rango1" },
                    { data: "rango2" },
                    { data: "rango3" },
                    { data: "rango4" },
                    { data: "rango5" },
                    { data: "rango6" },
                    { data: "rango7" },
                    { data: "rango8" },
                    { data: "rango9" },
                    { data: "rango10" },
                    { data: "rango11" },
                    { data: "rango12" },
                    { data: "rango13" },
                    { data: "rango14" },
                    { data: "rango15" },
                    { data: "action" },
                ],
            });
        },
    });
}

var idd;
$(document).on("click", ".editbtn ", function (event) {
    var id = $(this).data("id");
    var trid = $(this).closest("tr").attr("id");
    let checkBox = document.querySelector("#check-my");
    let tableAp = document.querySelector("#tabla_general_ap");
    let div = document.querySelector("#tabla_general");
    let div1 = document.querySelector("#edicion");
    if ((div.style.display = "block")) {
        tableAp.style.display="none";
        div.style.display = "none";
        div1.style.display = "block";
        checkBox.style.display = "none";
        idd = $(this).data("id");
        $.ajax({
            url: "../api/editregistro/" + idd,
            data: {
                id: idd,
            },
            type: "get",
            success: function (response) {
                $("#tarifa").val(response.data.id_tarifa);
                $("#categoria").val(response.data.id_demanda);
                $("#validacion").val(response.data.id_validacion);
                $("#nivel_voltaje").val(response.data.nivel_voltaje);
                $("#comercial").val(response.data.comercial);
                $("#demanda").val(response.data.demanda);
                $("#cargo_energia_1").val(response.data.cargo_energia1);
                $("#cargo_energia_2").val(response.data.cargo_energia2);
                $("#cargo_energia_3").val(response.data.cargo_energia3);
                $("#cargo_energia_4").val(response.data.cargo_energia4);
                $("#cargo_energia_5").val(response.data.cargo_energia5);
                $("#cargo_energia_6").val(response.data.cargo_energia6);
                $("#cargo_energia_7").val(response.data.cargo_energia7);
                $("#cargo_energia_8").val(response.data.cargo_energia8);
                $("#cargo_energia_9").val(response.data.cargo_energia9);
                $("#cargo_energia_10").val(response.data.cargo_energia10);
                $("#cargo_energia_11").val(response.data.cargo_energia11);
                $("#cargo_energia_12").val(response.data.cargo_energia12);
                $("#cargo_energia_13").val(response.data.cargo_energia13);
                $("#cargo_energia_14").val(response.data.cargo_energia14);
                $("#cargo_energia_15").val(response.data.cargo_energia15);
                $("#validacion_ap").val(response.data.validacion_ap);
                $("#nivel_ap").val(response.data.nivel_voltaje_ap);
                $("#comercial_ap").val(response.data.comercial_ap);
                $("#demanda_ap").val(response.data.demanda_ap);
                $("#rango_1").val(response.data.rango1);
                $("#rango_2").val(response.data.rango2);
                $("#rango_3").val(response.data.rango3);
                $("#rango_4").val(response.data.rango4);
                $("#rango_5").val(response.data.rango5);
                $("#rango_6").val(response.data.rango6);
                $("#rango_7").val(response.data.rango7);
                $("#rango_8").val(response.data.rango8);
                $("#rango_9").val(response.data.rango9);
                $("#rango_10").val(response.data.rango10);
                $("#rango_11").val(response.data.rango11);
                $("#rango_12").val(response.data.rango12);
                $("#rango_13").val(response.data.rango13);
                $("#rango_14").val(response.data.rango14);
                $("#rango_15").val(response.data.rango15);
            },
        });
    } else {
        div.style.display = "block";
        div1.style.display = "none";
        checkBox.style.display = "block";

    }
    $("#btnsave").click(function () {
        
        console.log("Registro a actualizar " + idd);
        $.ajax({
          url: '../api/saveRegistro/'+idd,
          method: 'post',
          data:$('#saveUpdate').serialize(),
          success: function (){
            if ((div1.style.display = "block")) {
                div1.style.display = "none";
                div.style.display = "block";
                checkBox.style.display = "block";
            } else {
                div1.style.display = "block";
                div.style.display = "none";
                checkBox.style.display = "none";
            }
            listar;
          },
            });
      });

    let boton = document.querySelector("#regresar");
    boton.addEventListener(
        "click",
        function (e) {
            if ((div1.style.display = "block")) {
                div1.style.display = "none";
                div.style.display = "block";
                checkBox.style.display = "block";
            } else {
                div1.style.display = "block";
                div.style.display = "none";
                checkBox.style.display = "none";
            }
        },
        false
    );
});


$(document).on('click', '.btndelete', function(event) {
    var id = $(this).data('id');
    console.log(id);
    var trid = $(this).closest('tr').attr('id');
    $('#modalDelete').modal('show');
    $("#btndelete").click(function () {
      $.ajax({
        url: '../api/deleteRegistro/'+id,
        method: 'post',
        data: $('#form2').serialize(),
        success: listar,
      });   
   });
  });
  