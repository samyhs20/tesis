<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TipoPliego;

class CatastroController extends Controller
{
    public function index()
    {
        $empresas = TipoPliego::all();
        return view('catastro.index', ['empresas' => $empresas]);
    }

    public function cargaData(Request $request)
    {
        $content = '';
        date_default_timezone_set('America/Guayaquil');
        $size = $request->file('archivo')->getSize();
        $input = $request->all();

        // $pythonScript = base_path('app/Python/validacion_previa.py');
        if ($request->hasFile('archivo') && $size < 22000000000) {
            $path = $request->file('archivo')->getRealPath();
            $nombre_base = $request->file('archivo')->getClientOriginalName();
            // Ruta absoluta al script Python
            $nombre_final = date('d-m-y') . '-' . date('H-i-s') . '-' . $nombre_base;
            $path2 = $request->file('archivo')->storeAs('data', $nombre_final, 'public');
            return response()->json([
                'msg' => '',
                'content' => 'Archivo listo para prevalidaciones....',
                'archivo' => $nombre_final,
                'catastro_validar' => $path2,
                'empresa' => $input['empresa_id'],
            ]);
        } else {
            return response()->json(['content' => 'Error en carga Archivo no se pudo subir']);
        }
    }

    function validacionPython(Request $request)
    {
        $input = $request->all();
        $nombre_final = $input['archivo'];
        $path2 = $input['catastro_validar'];
        $catastro = '';
        $bandera = 0;
        $logs = base_path('public/data/logs.txt');
        $pythonScript = base_path('app/Python/validacion_previa.py');
        $comando = "python $pythonScript $nombre_final >  $logs";
        $output = '';
        try {
            exec($comando);
            //session()->put('pid', $pid);
            $filename = public_path('data/logs.txt');
            $content = file_get_contents($filename);
            $path_inconsistencia = base_path('public\data\inconsistencias\inconsistencias_' . $nombre_final);

            if (file_exists($path_inconsistencia)) {
                //  $content .= 'archivo se va a eliminar '.base_path('public/data/'.$path2);
                unlink(base_path('public/data/' . $path2));
                $bandera = 1;
            } else {
                $bandera = 0;
                $catastro = base_path('public/data/' . $path2);
                // el archivo no existe en la ruta especificada
            }
            //$content = file_get_contents($filename);
        } catch (Exception $e) {
            $output = 'Error: ' . $e->getMessage();
        }
        return response()->json([
            'msg' => $output,
            'content' => $content,
            'archivo' => 'inconsistencias_' . $nombre_final,
            'bandera' => $bandera,
            'catastro' => $catastro,
        ]);
    }

    public function descargarArchivo($archivo)
    {
        if (!$archivo) {
            abort(404);
        }
        return response()->download(public_path('data/inconsistencias/' . $archivo), $archivo, [
            'Content-Disposition' => 'attachment',
        ]);
    }

    function procesamientoCatastro(Request $request)
    {
        
        date_default_timezone_set('America/Guayaquil');
        //$DateAndTime = date('m-d-Yh-i-sa', time());  
        $DateAndTime = date('Y-m-d-h-i', time());
        $fecha_parametro = $DateAndTime;
        $input = $request->all();
        $documento_ingresado= $input['archivo'];
        $empresa_ingresada=$input['empresa'];
        //flujo de ejecucion
        //C:\xampp\htdocs\Tarifa_dashboard\public\ejecucion\Job_Carga_F.kjb
        //file:///C:/xampp/htdocs/Tarifa_dashboard/public\u001bjecucion/Job_Carga_F.kjb
        $flujo = "/file:\"C:\\xampp\htdocs\Tarifa_dashboard\public\\ejecucion\Job_Carga_F.kjb\"";
        //catastro
        $catastro = "\"/param:archivo=$documento_ingresado\"";
        //empresa
        $empresa = "\"/param:empresa=$empresa_ingresada\"";
        //fecha_parametro
        $fecha_fin = "\"/param:fecha=$fecha_parametro\"";
        //--------------------------------------
        //$url_ejecucion="call \"C:\Program Files\Pentaho-DataIntegration\kitchen.bat\" /file:\"C:\Users\santi\OneDrive\Documentos\Santiago Castro\Tesis\Pentaho_Curso\Job_Test.kjb\" \"/param:archiv=C:\Users\santi\Downloads\lementos.csv\" \"param:empresa=1\" \"/param:fecha=2023-02-21-17-20\"";
        $url_ejecucion = "call \"C:\Program Files\Pentaho-data-integration\kitchen.bat\" $flujo $catastro $empresa $fecha_fin";
        //echo $url_ejecucion;
        $output = null;
        $retval = null;

        try {
            exec($url_ejecucion, $output, $retval);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        };

        return response()->json(['data' => $input , 'fecha'=>$fecha_parametro, 'out'=>$output, 'ret'=>$retval]);
    }
    function suspenderCatastro(Request $request)
    {
        $pythonScript = base_path('app/Python/validacion_previa.py');
        // $python_script_name = 'my_python_script.py'; // nombre del script Python
        $pid = session()->get('pid');
        return response()->json(['pid' => $pid]);
    }
}
