<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PliegoTarifaController;
use App\Http\Controllers\ImportarController;


Route::get('', [HomeController::class, 'index']);

//usuarios
Route::get('/users', [UserController::class, 'index'])->name('user.list');
Route::get('/delete/{id}',[UserController::class, 'destroy'])->name('delete');
Route::get('/register', [UserController::class, 'show'])->name('register_admin');
Route::POST('/register',[UserController::class, 'create'])->name('registrop');

//routas de Pliego
Route::get('/pliego',[PliegoTarifaController::class,'index'])->name('pliego.list');

//ruta para importar y exportar archivos 
Route::get('/pliego/new',[ImportarController::class,'importView'])->name('pliego.importview');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});