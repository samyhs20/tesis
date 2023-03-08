document.addEventListener("DOMContentLoaded", () => {
    let form = document.querySelector("#subir_form");
    let res = document.querySelector("#response");
    //let btn_procesar=document.querySelector('#boton_procesar');
    let procesamiento_modal = document.querySelector("#procesamiento");
    let closeModal = document.querySelector("#close_letras");
    let closeSimbolo = document.querySelector("#close");
    let sendEmpresa = document.querySelector("#send_empresa");
    let ventanaModal = document.querySelector(".modal-content");
    let botonProcesar = document.querySelector("#boton_ingreso");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        subir_archivos(document.querySelector("#subir_form"));
    });

    sendEmpresa.addEventListener("submit", (event) => {
        //modal_espera();
        ventanaModal.style.display = "none";
        botonProcesar.disabled = true;
    });

    //btn_procesar.addEventListener('click',procesamiento);
    procesamiento_modal.addEventListener("click", abrir_modal);
    closeModal.addEventListener("click", cerrar_modal);
    closeSimbolo.addEventListener("click", cerrar_modal);
});

function subir_archivos(form) {
    let barra_estado = document.querySelector("#barra_estado");
    let span = document.querySelector(".barra_azul_span");
    let boton_cancelar = document.querySelector("#boton_cancelar");
    barra_estado.classList.remove("barra_verde", "barra_roja");
    //request Ajax
    let peticion = new XMLHttpRequest();
    peticion.upload.addEventListener("progress", (e) => {
        let porcentaje = Math.round((e.loaded / e.total) * 100);
        //console.log(porcentaje);
        barra_estado.style.width = porcentaje + "%";
        span.innerHTML = porcentaje + "%";
    });
    //end request
    peticion.addEventListener("load", () => {
        barra_estado.classList.add("barra_verde");
        span.innerHTML = "Proceso Completado";
        let respuesta = JSON.parse(peticion.response);
        $('#contentLogs').html("<pre>"+respuesta.content+"</pre>");

//console.log(respuesta.output);
    });
    //send data
    peticion.open("POST", "catastro");
    peticion.send(new FormData(form));
    //cancel load
    boton_cancelar.addEventListener("click", () => {
        peticion.abort;
        barra_estado.classList.remove("barra_verde");
        barra_estado.classList.add("barra_roja");
        span.innerHTML = "Proceso Cancelado";
    });
}

function visualizarInformacion() {
    let res = document.querySelector("#response");
    $.get("visualizar_archivo.php", function (info, estado) {
        res.innerHTML += info;
    });
}

function presionado() {
    var result = "<?php php_func(); ?>";
}
function abrir_modal() {
    $("#exampleModal").modal("show");
}
function cerrar_modal() {
    $("#exampleModal").modal("hide");
}

function modal_espera() {
    let contenido = document.querySelector("#loading");
    contenido.classList.remove("ocultar");
    contenido.classList.add("mostrar");
}
