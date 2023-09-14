@extends('adminlte::page')
@section('title', 'Inicio')



@section('content')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <h1 class="text-center"  style="font-size: 30px"><b>Predicción de la Energía </b></h1>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="fecha text-center">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for=""><p class="font-weight-bold">Escoja la fecha de predicción</p></label>
                            </div>
                            <div class="col-sm-3 text-left">
                                <input type="month" id="fecha" min="2023-05" max="" required>
                            </div>
                            <div class="col-sm-3 text-left">
                        <button type="submit" class="btn btn-primary text-center" id="btn_prediccion" style="background: #212529">Predecir</button>
                            </div>
                        </div>
            
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <section class="all_result">
                                <div class="resultado">
                                </div>
                                <div class="col-md-6 mx-auto">
                                    <table class="table table-bordered table-sm text-center" id="resultados">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>                    
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Energia</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tabla_resultante">                 
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <canvas id="grafica" class="col-md-6" style="max-width: 100%"></canvas>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        
    </x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numjs/0.16.0/numjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">

    var fecha_ingresada=document.querySelector('#fecha');
    var predecir=document.querySelector('#btn_prediccion');
    //graficos
    var cuadroGrafico=document.querySelector('#grafica').getContext('2d');    

    let fechaInicialData="2023-05";
    const fechaInicialDataFijo="2023-05";
    var modelo = null;
    const totalData=53;
    let datos_energia_norm=[];
    let X_test=[];
    let y_test=[];
    var newShape = [-1, 12, 1];
    let reshapedArray=[];
    let max=0;
    let min=0;
    var fechaFinalData=null;
    let diferenciaEnMeses=null;
    var y_pred_denorm=[];
    let fechasGeneradas=[];
    let miGrafico;
    

    


    fecha_ingresada.addEventListener('input',function(){
        fechaInicialData=new Date(`${fechaInicialData}-01`);
        fechaFinalData = new Date(`${fecha_ingresada.value}-01`);
        diferenciaEnMeses = (fechaFinalData.getFullYear() - fechaInicialData.getFullYear()) * 12 + (fechaFinalData.getMonth() - fechaInicialData.getMonth());        
        var totalNuevaData=totalData+(diferenciaEnMeses/0.25)+12;
        var datosGenerados=generarFechas(fechaInicialData,totalNuevaData);        
        //minmaxScaler
        datos_energia_norm = minMaxScaler(datosGenerados);
        //generate_sequence
        var [X_generate,y_generate]=getSequences(datos_energia_norm, 12);
        //division datos train and test
        const trainSize = Math.floor(X_generate.length * 0.75);
        const X_train = X_generate.slice(0, trainSize);
        X_test = X_generate.slice(trainSize);
        const y_train = y_generate.slice(0, trainSize);
        y_test = y_generate.slice(trainSize);
        reshapedArray = X_test.map((subArray) => {
        return subArray.map((item) => [item]);
        });

        //reshape
        //var reshapedArray = reshapeArray(X_test, newShape);
    });

    //Cargar modelo    
    (async () => {
        console.log("Cargando modelo...");
        modelo = await tf.loadLayersModel("../model/model.json");
        console.log("Modelo cargado...");
    })();
    

    
    predecir.addEventListener('click',()=>{
        limpiarGrafica();
        eliminarFilas();
        if(modelo!=null){
        var tensor = tf.tensor3d(reshapedArray);
        var prediccion = modelo.predict(tensor).dataSync();            
        var max=569322211;
        var min=5578755;
        y_pred_denorm=[];
        fechasGeneradas=[];
        for (let i=0; i<prediccion.length;i++) {            
            let resultado=(prediccion[i]*max - prediccion[i] * min)+min;
            y_pred_denorm.push(resultado);
        }        

        let aux=0;        
        for(let j=0;j<y_pred_denorm.length;j++){            
            /*fecha_reducir.setMonth(fecha_reducir.getMonth()-1);            
            console.log(fecha_reducir.getFullYear()+"-"+fecha_reducir.getMonth());*/
            if(j<=diferenciaEnMeses){                
            //let fechaNueva=transformarFecha(fecha_ingresada.value,j);
            let fechaNueva=transformarFechaAdelante(fechaInicialDataFijo,j);
            fechasGeneradas.push(fechaNueva);
            document.querySelector('.tabla_resultante').innerHTML+=`<tr>
                                                                    <th scope="row">${j+1}</th>
                                                                    <td>${fechaNueva}</td>
                                                                    <td>${y_pred_denorm[j].toFixed(3)} kwH</td>
                                                                </tr>`;            
            }  
                      
        }
        //grafica de la serie de tiempo
        graficacion();
        }else{
        document.querySelector('.resultado').innerHTML="Intentalo de nuevo mas tarde";
    }

    });


    function graficacion(){
        var data = {
            labels: fechasGeneradas,
        datasets: [{
            label: 'Predicción Demanda de Energía Electrica',
            data: y_pred_denorm,
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de las barras
            borderColor: 'rgba(75, 192, 192, 1)', // Color del borde de las barras
            borderWidth: 1
        }]};
        var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }};    
        // Crea el gráfico de barras
        miGrafico = new Chart(cuadroGrafico, {
            type: 'line',
            data: data,
            options: options
        });
    }

    function generarFechas(fechaInicial,numGeneradas){
        const arregloFechas=[];
        for(let i=2; i<=numGeneradas+1;i++){
            const nuevaFecha=new Date(fechaInicial);
            nuevaFecha.setMonth(fechaInicial.getMonth()+i);
            var numFecha=nuevaFecha.getTime();
            arregloFechas.push(numFecha);
        }
        return arregloFechas;
    }

    function minMaxScaler(data){
        const min = Math.min(...data);
        const max = Math.max(...data);
        //const max=569322211;
        //const min=5578755;    
        const scaledData = data.map((value) => parseFloat(((value - min) / (max - min)).toFixed(6)));        
        return scaledData;
    }
    function getMax(data){
        return Math.max(...data);
    }
    function getMin(data){
        return Math.min(...data);
    }

    function getSequences(data,seqLength){
        const X = [];
        const y = [];
            for (let i = 0; i < data.length - seqLength; i++) {
                X.push(data.slice(i, i + seqLength));
                y.push(data[i + seqLength]);
            }
        return [X, y];
    }

    function transformarFecha(fecha,reduccion){
        var partes=fecha.split('-');
        var year=parseInt(partes[0]);
        var month=parseInt(partes[1]);
        var fechaObj=new Date(year,month-1,1);
        fechaObj.setMonth(fechaObj.getMonth()-reduccion);        
        var nuevoMonth=fechaObj.getMonth()+1;
        var nuevaFecha=fechaObj.getFullYear()+"-"+(nuevoMonth<10 ? "0" + nuevoMonth:nuevoMonth);
        return nuevaFecha;
    }
    function transformarFechaAdelante(fecha,reduccion){
        var partes=fecha.split('-');
        var year=parseInt(partes[0]);
        var month=parseInt(partes[1]);
        var fechaObj=new Date(year,month-1,1);
        fechaObj.setMonth(fechaObj.getMonth()+reduccion);        
        var nuevoMonth=fechaObj.getMonth()+1;
        var nuevaFecha=fechaObj.getFullYear()+"-"+(nuevoMonth<10 ? "0" + nuevoMonth:nuevoMonth);
        return nuevaFecha;
    }
    function eliminarFilas(){
        var tabla = document.getElementById("resultados");
        var filas = tabla.getElementsByTagName("tr");
        for (var i = filas.length - 1; i > 0; i--) {
        tabla.deleteRow(i);
    }
    }
    function limpiarGrafica(){
        if (miGrafico) {
            miGrafico.destroy();
        }
    }
  </script>

@stop
