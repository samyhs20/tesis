<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\NotaLectura;
use App\Models\TipoPliego;
use App\Models\PliegoTarifa;
use App\Models\Tarifa;

class CSVController extends Controller
{
    //CREAR NUEVO PLIEGO TARIFARIO
    public function importView()
    {
        $records = null;
        $headers = null;
        $records1 = null;
        $headers1 = null;
        return view('pliegotarifa.import')->with(['records' => $records, 'headers' => $headers, 'records_ap' => $records1, 'headers_ap' => $headers1]);
    }

    public function import(Request $request)
    {
        if ($request->hasFile('documentoTa') && $request->hasFile('documentoAc')) {
            $path = $request->file('documentoTa')->getRealPath();
            $path2 = $request->file('documentoAc')->getRealPath();

            $csv = Reader::createFromPath($path, 'r');
            $csv->setDelimiter(';');
            $headers = $csv->fetchOne();
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();

            $csv1 = Reader::createFromPath($path2, 'r');
            $csv1->setDelimiter(';');
            //$csv->setHeaderOffset(0);
            $headers1 = $csv1->fetchOne();
            $csv1->setHeaderOffset(0);
            $records1 = $csv1->getRecords();
        } else {
            $records = null;
            $headers = null;
            $records1 = null;
            $headers1 = null;
        }

        return view('pliegotarifa.import')->with(['records' => $records, 'headers' => $headers, 'records_ap' => $records1, 'headers_ap' => $headers1]);
    }

    public function guardarpliego(Request $request)
    {
        $empresa = TipoPliego::where('descripcion', 'SIMILAR TO', $request['empresa'])->value('id');
        if (isset($empresa)) {
            $msg = 'Pliegos de Empresa Distribuidora ya existente ';
        } else {
            $empresa = TipoPliego::create([
                'descripcion' =>$request['empresa'],
            ]);
            $dataJson = json_decode($request['data'], true);
            
             foreach($dataJson as $data){
                $newdata = new PliegoTarifa();
                    $newdata->id_tarifa = Tarifa::where('descripcion', 'SIMILAR TO', $data['tarifa'])
                        ->value('id');
                    $newdata->id_tipo_pliego =$empresa->id;
                    $newdata->id_demanda = $data['categoria'];
                    $newdata->id_validacion = $data['validacion'];
                    $newdata->nivel_voltaje = (float)$data['nivel_voltaje'];
                    $newdata->comercial = (float)$data['comercializacion'];
                    $newdata->demanda = (float)$data['demanda'];
                    $newdata->cargo_energia1 = (float)$data['cargo_1'];
                    $newdata->cargo_energia2 =(float) $data['cargo_2'];
                    $newdata->cargo_energia3 = (float)$data['cargo_3'];
                    $newdata->cargo_energia4 = (float)$data['cargo_4'];
                    $newdata->cargo_energia5 = (float)$data['cargo_5'];
                    $newdata->cargo_energia6 = (float)$data['cargo_6'];
                    $newdata->cargo_energia7 = (float)$data['cargo_7'];
                    $newdata->cargo_energia8 = (float)$data['cargo_8'];
                    $newdata->cargo_energia9 = (float)$data['cargo_9'];
                    $newdata->cargo_energia10 = (float)$data['cargo_10'];
                    $newdata->cargo_energia11 = (float)$data['cargo_11'];
                    $newdata->cargo_energia12 = (float)$data['cargo_12'];
                    $newdata->cargo_energia13 = (float)$data['cargo_13'];
                    $newdata->cargo_energia14 = (float)$data['cargo_14'];
                    $newdata->cargo_energia15 = 0;
                    $newdata->validacion_ap = $data['validacion_ap'];
                    $newdata->comercial_ap = (float)$data['comercializacion_ap'];
                    $newdata->demanda_ap = $data['demanda_ap'];
                    $newdata->nivel_voltaje_ap = $data['nivel_voltaje_ap'];
                    $newdata->rango1 = (float)$data['rango_1'];
                    $newdata->rango2 = (float)$data['rango_2'];
                    $newdata->rango3 = (float)$data['rango_3'];
                    $newdata->rango4 = (float)$data['rango_4'];
                    $newdata->rango5 = (float)$data['rango_5'];
                    $newdata->rango6 = (float)$data['rango_6'];
                    $newdata->rango7 = (float)$data['rango_7'];
                    $newdata->rango8 = (float)$data['rango_8'];
                    $newdata->rango9 = (float)$data['rango_9'];
                    $newdata->rango10 = (float)$data['rango_10'];
                    $newdata->rango11 = (float)$data['rango_11'];
                    $newdata->rango12 = (float)$data['rango_12'];
                    $newdata->rango13 = (float)$data['rango_13'];
                    $newdata->rango14 = (float)$data['rango_14'];    
                    $newdata->rango15 = (float)$data['rango_15'];

                    $newdata->save();
                    $datos[] = $newdata;
            }
            $msg="Se Creo el pliego con su Distribuidora";
        }

        return response()->json([
            'msg' => $msg,
            200,
        ]);
    }
}
