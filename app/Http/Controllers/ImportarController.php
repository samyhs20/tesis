<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImportS\PliegoTarifaImport;
use Excel;
use App\Models\NotaLectura;
use App\Models\TipoPliego;
use App\Models\PliegoTarifa;
use App\Models\Tarifa;

class ImportarController extends Controller
{
    //CREAR NUEVO PLIEGO TARIFARIO
    public function importView()
    {
        return view('pliegotarifa.import');
    }
    public function import(Request $request)
    {
        $request->validate([
            'descripcion' => ['required', 'string', 'max:15', 'unique:' . TipoPliego::class],
        ]);
        if ($request->hasFile('documentoTa') && $request->hasFile('documentoAc')) {
            $empresa = TipoPliego::create([
                'descripcion' => $request['descripcion'],
            ]);
            $path = $request->file('documentoTa')->getRealPath();
            $path2 = $request->file('documentoAc')->getRealPath();
            $fp = fopen($path, 'r');
            fgetcsv($fp);
            while (($data = fgetcsv($fp, 1000, ';')) !== false) {
                $newdata = new PliegoTarifa();
                $fp2 = fopen($path2, 'r');
                fgetcsv($fp2);
                while (($data2 = fgetcsv($fp2, 1000, ';')) !== false) {
                    if ($data2[3] == $data[3] && $data2[5] == $data[5]) {
                        $newdata->id_tarifa = Tarifa::where('codigo_tarifa', '=', $data[4])
                            ->where('descripcion', 'SIMILAR TO', $data[5])
                            ->value('id');
                        $newdata->id_tipo_pliego = TipoPliego::where('descripcion', '=', $request['descripcion'])->value('id');
                        $newdata->id_demanda = $data[0];
                        $newdata->id_validacion = $data[6];
                        $newdata->nivel_voltaje = $data[1];
                        $newdata->comercial = $data[8];
                        $newdata->demanda = $data[7];
                        $newdata->cargo_energia1 = $data[9];
                        $newdata->cargo_energia2 = $data[10];
                        $newdata->cargo_energia3 = $data[11];
                        $newdata->cargo_energia4 = $data[12];
                        $newdata->cargo_energia5 = $data[13];
                        $newdata->cargo_energia6 = $data[14];
                        $newdata->cargo_energia7 = $data[15];
                        $newdata->cargo_energia8 = $data[16];
                        $newdata->cargo_energia9 = $data[17];
                        $newdata->cargo_energia10 = $data[18];
                        $newdata->cargo_energia11 = $data[19];
                        $newdata->cargo_energia12 = $data[20];
                        $newdata->cargo_energia13 = $data[21];
                        $newdata->cargo_energia14 = $data[22];
                        if (isset($data[23]) && iseet($data2[23])) {
                            $newdata->cargo_energia15 = $data[23];
                            $newdata->rango15 = $data2[23];
                        }
                        else {
                            $newdata->cargo_energia15 = 0.00;
                            $newdata->rango15 = 0.00;
                        }
                        $newdata->validacion_ap = $data2[6];
                        $newdata->comercial_ap = $data2[8];
                        $newdata->demanda_ap = $data2[7];
                        $newdata->nivel_voltaje_ap = $data2[1];
                        $newdata->rango1 = $data2[9];
                        $newdata->rango2 = $data2[10];
                        $newdata->rango3 = $data2[11];
                        $newdata->rango4 = $data2[12];
                        $newdata->rango5 = $data2[13];
                        $newdata->rango6 = $data2[14];
                        $newdata->rango7 = $data2[15];
                        $newdata->rango8 = $data2[16];
                        $newdata->rango9 = $data2[17];
                        $newdata->rango10 = $data2[18];
                        $newdata->rango11 = $data2[19];
                        $newdata->rango12 = $data2[20];
                        $newdata->rango13 = $data2[21];
                        $newdata->rango14 = $data2[22];
                    }
                }
                fclose($fp2);
                $datos[] = $newdata;
            }
            fclose($fp);
        } else {
            $path = 'no existe';
        }
        return response()->json(
            [
                'exist' => 'existe',
                'data' => $datos,
                'path' => $path,
            ],
            200,
        );
    }
}
