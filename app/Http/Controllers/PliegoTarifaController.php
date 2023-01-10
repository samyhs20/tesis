<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PliegoTarifa;
use App\Models\TipoPliego;
use App\Models\Tarifa;


class PliegoTarifaController extends Controller
{
    //controladores de pliegotarifa.index
    public function index()
    {
        $pliegos = TipoPliego::get();
        $tarifas = Tarifa::get();
        return view('pliegotarifa.index', [
            'pliegos' => $pliegos,
            'tarifas' => $tarifas,
        ]);
    }

    public function findpliegos(Request $request)
    {
        $pliegos = PliegoTarifa::where('id_tipo_pliego', $request['select-pliegos'])->get();
        foreach ($pliegos as $key => $value) {
            $val = Tarifa::find($value->id_tarifa);
            if (isset($val->codigo_tarifa)) {
                $value->codigo = $val->codigo;
                
            } else {
                $value->codigo = '-';
            }
            $value->tarifa=$val->codigo_tarifa;
            $value->descripcion = $val->descripcion;
            $value->action =
                '<a  href="#" data-id="' .
                $value->id .
                '" class="btn btn-info btn-sm editbtn" >Edit</a>
            <a href="#" data-id="' .
                $value->id .
                '"  class="btn btn-danger btn-sm btndelete" >Delete</a>';
        }
        //href="{{ route('updateindex', $user->id) }}"
        return response()->json(
            [
                'exist' => 'existe',
                'data' => $pliegos,
            ],
            200,
        );
    }

    //controladores para editar los registros
    public function findOneRegistre(Request $request)
    {
        $input = $request->all();
        $registro = PliegoTarifa::find($input['id']);
        return response()->json(
            [
                'exist' => 'existe',
                'data' => $registro,
            ],
            200,
        );
    }
    public function updateOneRegistre(Request $request, $id)
    {
        $input = $request->all();
        $registro = PliegoTarifa::find($id);
        $registro->id_tarifa = $input['tarifa'];
        $registro->id_demanda = $input['categoria'];
        $registro->id_validacion = $input['validacion'];
        $registro->nivel_voltaje = $input['nivel_voltaje'];
        $registro->comercial = $input['comercial'];
        $registro->demanda = $input['demanda'];
        $registro->cargo_energia1 = $input['cargo_energia_1'];
        $registro->cargo_energia2 = $input['cargo_energia_2'];
        $registro->cargo_energia3 = $input['cargo_energia_3'];
        $registro->cargo_energia4 = $input['cargo_energia_4'];
        $registro->cargo_energia5 = $input['cargo_energia_5'];
        $registro->cargo_energia6 = $input['cargo_energia_6'];
        $registro->cargo_energia7 = $input['cargo_energia_7'];
        $registro->cargo_energia8 = $input['cargo_energia_8'];
        $registro->cargo_energia9 = $input['cargo_energia_9'];
        $registro->cargo_energia10 = $input['cargo_energia_10'];
        $registro->cargo_energia11 = $input['cargo_energia_11'];
        $registro->cargo_energia12 = $input['cargo_energia_12'];
        $registro->cargo_energia13 = $input['cargo_energia_13'];
        $registro->cargo_energia14 = $input['cargo_energia_14'];
        $registro->cargo_energia15 = $input['cargo_energia_15'];
        $registro->validacion_ap = $input['validacion_ap'];
        $registro->nivel_voltaje_ap = $input['nivel_ap'];
        $registro->comercial_ap = $input['comercial_ap'];
        $registro->demanda_ap = $input['demanda_ap'];
        $registro->rango1 = $input['rango_1'];
        $registro->rango2 = $input['rango_2'];
        $registro->rango3 = $input['rango_3'];
        $registro->rango4 = $input['rango_4'];
        $registro->rango5 = $input['rango_5'];
        $registro->rango6 = $input['rango_6'];
        $registro->rango7 = $input['rango_7'];
        $registro->rango8 = $input['rango_8'];
        $registro->rango9 = $input['rango_9'];
        $registro->rango10 = $input['rango_10'];
        $registro->rango11 = $input['rango_11'];
        $registro->rango12 = $input['rango_12'];
        $registro->rango13 = $input['rango_13'];
        $registro->rango14 = $input['rango_14'];
        $registro->rango15 = $input['rango_15'];

        $registro->save();
        return response()->json(['data' => 'realizado', 'id' => $id], 200);
    }

    public function deleteRegistre($id)
    {
        $registro = PliegoTarifa::find($id);
        if ($registro->delete()) {
            return response()->json(['data' => 'borrado existoso']);
        } else {
            return response()->json(['data' => 'problemas en el servidor']);
        }
    }

    
}
