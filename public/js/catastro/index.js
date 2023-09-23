let botonProcesar = document.querySelector("#boton_ingresar");
let botonCancelar = document.querySelector("#boton_cancelar");
let spinner = document.querySelector("#boton_ingresar .spinner-border");
var ajaxCompleted = false;
document.addEventListener("DOMContentLoaded", () => {
    let form = document.querySelector("#subir_form");
    let res = document.querySelector("#response");
    //let btn_procesar=document.querySelector('#boton_procesar');
    let procesamiento_modal = document.querySelector("#procesamiento");
    let closeModal = document.querySelector("#close_letras");
    let closeSimbolo = document.querySelector("#close");
    let sendEmpresa = document.querySelector("#send_empresa");
    let ventanaModal = document.querySelector(".modal-content");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        subir_archivos(document.querySelector("#subir_form"));
        spinner.classList.remove("d-none"); // muestra el spinner
        botonProcesar.disabled = true; // deshabilita el botón
    });
});

function subir_archivos(form) {
    let divlogs = document.querySelector("#contentLogs");
    let barra_estado = document.querySelector("#barra_estado");
    let span = document.querySelector(".barra_azul_span");
    let boton_cancelar = document.querySelector("#boton_cancelar");
    barra_estado.classList.remove("barra_verde", "barra_roja");

    //request Ajax
    let peticion = new XMLHttpRequest();
    peticion.upload.addEventListener("progress", (e) => {
        let porcentaje = Math.round((e.loaded / e.total) * 100);
        divlogs.style.display = "none";
        barra_estado.style.width = porcentaje + "%";
        span.innerHTML = porcentaje + "%";
        console.log(porcentaje);
    });
    //end request
    peticion.addEventListener("load", () => {
        barra_estado.classList.add("barra_verde");
        span.innerHTML = "Espere mientras se valida la Informacion";
        //spinner.classList.add("d-none"); // quitar el spinner
        botonCancelar.disabled = true; // habilita el botón
        let respuesta = JSON.parse(peticion.response);
        divlogs.style.display = "block";
        $("#contentLogs").html(
            "<pre> " + respuesta.content + "\n Cargando .... " + "</pre>"
        );
        console.log("entrando al proceso de python");
        $.ajax({
            //{{ route('operaciones.institucion.detalle') }}
            url: "../api/proceso/python",
            method: "post",
            data: {
                archivo: respuesta.archivo,
                //empresa: respuesta.empresa,
                catastro_validar: respuesta.catastro_validar,
            },
            success: function (response) {
                console.log(response);
                spinner.classList.add("d-none"); // quitar el spinner
                botonProcesar.disabled = false; // habilita el botón
                if (response.bandera == 1) {
                    $("#contentLogs").html(
                        "<pre>" +
                            response.content +
                            "</pre>" +
                            '<button onclick="descarga(' +
                            "'" +
                            response.archivo +
                            "'" +
                            ')" class="btn btn-primary">Descargar archivo</button>'
                    );
                } else {
                    $("#contentLogs").html(
                        "<pre>" + response.content + "</pre>"
                    );
                    $("#exampleModal").on("hide.bs.modal", function (e) {
                        //response.tamanoArchivoKB
                        if (!ajaxCompleted) {
                            e.preventDefault(); // Evita que el modal se cierre automáticamente
                            // Puedes mostrar un mensaje de espera o realizar cualquier otra acción aquí
                            $("#ModalBodyProceso").html("Datos Ingresados el archivo tiene ")
                        }
                    });
                    $("#exampleModal").modal("show");
                    $.ajax({
                        url: "../api/proceso",
                        method: "get",
                        data: {
                            archivo: response.catastro,
                            empresa: respuesta.empresa,
                        },
                        success: function (response) {
                            console.log(response);
                            ajaxCompleted = true;
                            var notificationSound =
                                document.getElementById("notification-sound");
                            notificationSound.play();
                            // Detiene la reproducción del sonido después de un segundo
                            setTimeout(function () {
                                notificationSound.pause();
                                notificationSound.currentTime = 0; // Reinicia el tiempo de reproducción
                            }, 1000); // Detener después de 1 segundo (1000 milisegundos)
                            // Cierra el modal después de un breve retraso (puedes ajustar el tiempo según tu preferencia)
                            setTimeout(function () {
                                $("#exampleModal").modal("hide");
                                $("#contentLogs").html(
                                    "<pre> Datos procesados Correctamente</pre>"
                                );
                            }, 2000); // 2000 milisegundos (2 segundos) de retraso
                        },
                    });
                }
            },
        });
    });
    //send data
    peticion.open("POST", "catastro");
    peticion.send(new FormData(form));
    //cancel load
    boton_cancelar.addEventListener("click", () => {
        peticion.abort();
        document.querySelector("#barra_estado").value = 0;
        barra_estado.classList.remove("barra_verde");
        barra_estado.classList.add("barra_roja");
        spinner.classList.add("d-none"); // quitar el spinner
        botonProcesar.disabled = false; // habilita el botón
        span.innerHTML = "Proceso Cancelado";
    });
}

function cerrar_modal() {}

function modal_espera() {
    let contenido = document.querySelector("#loading");
    contenido.classList.remove("ocultar");
    contenido.classList.add("mostrar");
}
function descarga(archivo) {
    console.log(archivo);

    fetch(`../api/descargar/${archivo}`)
        .then((response) => response.blob())
        .then((blob) => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement("a");
            a.href = url;
            a.download = archivo;
            a.click();
        });
}
