<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatastroController extends Controller
{
    public function index()
    {
        
        return view('catastro.index');
    }

    public function cargaData(Request $request)
    {
        $content="";
        date_default_timezone_set('America/Guayaquil');
        $size = $request->file('archivo')->getSize();
        $output = [];
        $pythonScript = base_path('app/Python/validacion_previa.py');
       // $pythonScript = base_path('app/Python/validacion_previa.py');
        if ($request->hasFile('archivo') && $size < 22000000000) {
            $path = $request->file('archivo')->getRealPath();
            $nombre_base = $request->file('archivo')->getClientOriginalName();
            // Ruta absoluta al script Python
            $nombre_final = date('d-m-y') . '-' . date('H-i-s') . '-' . $nombre_base;
            $path2 = $request->file('archivo')->storeAs('data', $nombre_final, 'public');
            $logs = base_path('public/data/logs.txt');
            $comando = "python $pythonScript $nombre_final $nombre_base >>  $logs";
           

          try {
            $salida = "";
             exec($comando,$output);
             $filename = public_path('data/logs.txt');
             $content = file_get_contents($filename);
             
             
        } catch (Exception $e) {
            // mostrar el mensaje de error
            //nuevos datos
            $output= 'Error: ' . $e->getMessage();

        }

            return response()->json(['msg' => $output, 'content'=>$content]);
        } else {

            return response()->json(['msg' => 'Error en carga Archivo no se pudo subir']);
        }
    }
}
