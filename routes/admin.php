<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PliegoTarifaController;
use App\Http\Controllers\ImportarController;
use App\Http\Controllers\CatastroController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CSVController;

Route::get('', [HomeController::class, 'index']);

//usuarios
Route::get('/users', [UserController::class, 'index'])->name('user.list');
Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
Route::get('/register', [UserController::class, 'show'])->name('register_admin');
Route::POST('/register', [UserController::class, 'create'])->name('registrop');

//routas de Pliego
Route::get('/pliego', [PliegoTarifaController::class, 'index'])->name('pliego.list');

//ruta para importar y exportar archivos
//Route::get('/pliego/new',[ImportarController::class,'importView'])->name('pliego.importview');
//Route::post('/pliego/new',[ImportarController::class,'import'])->name('pliego.import');
Route::get('/pliego/new', [CSVController::class, 'importView'])->name('pliego.importView');

Route::get('/pliego/export', [CSVController::class, 'exportView'])->name('pliego.exportView');
Route::post('/pliego/new', [CSVController::class, 'import'])->name('pliego.import');

Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//RUTAS PARA CATASTRO
Route::prefix('catastro')->group(function () {
    Route::get('/', [CatastroController::class, 'index'])->name('catastro.index');
    Route::post('/', [CatastroController::class, 'cargaData'])->name('catastro.upload');
});
