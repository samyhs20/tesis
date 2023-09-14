<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PliegoTarifaController;
use App\Http\Controllers\ImportarController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\CatastroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::GET('/editRol/{id}', [UserController::class, 'findUser']);
Route::POST('/saveRol/{id}', [UserController::class, 'updateRol']);
Route::get('/pliego/{id}', 'App\Http\Controllers\PliegoTarifaController@list');
Route::post('/edit', [PliegoTarifaController::class, 'action'])->name('pliego.action');

//api de buscar los pliegos en especifico con los Alumbrados Publicos
Route::POST('/pliegos', [PliegoTarifaController::class, 'findpliegos'])->name('pliegos.find');
Route::POST('/pliegos/ap', [PliegoTarifaController::class, 'findpliegos_ap'])->name('pliegos.find_ap');

//API para guardar nnuevo pliego en la base de datos
//Route::post('/pliego/new',[ImportarController::class,'guardarpliego']);

//api de registro de pliegos
Route::GET('/editregistro/{id}', [PliegoTarifaController::class, 'findOneRegistre']);
Route::Post('/saveRegistro/{id}', [PliegoTarifaController::class, 'updateOneRegistre']);
Route::POST('/deleteRegistro/{id}', [PliegoTarifaController::class, 'deleteRegistre']);

Route::POST('/pliego/save', [CSVController::class, 'guardarpliego']);

Route::GET('/descargar/{archivo}', [CatastroController::class, 'descargarArchivo'])->name('descargar.inconsistencias');
Route::GET('/proceso', [CatastroController::class, 'procesamientoCatastro']);
Route::POST('/proceso/python', [CatastroController::class, 'validacionPython']);
//Route::POST('/suspender', [CatastroController::class, 'suspenderCatastro']);

