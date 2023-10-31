<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

Route::get('/lista-personas', [PersonaController::class,'listarPersona'])->name('lista-personas');
Route::get('/lista-personas/{id_persona}',[PersonaController::class,'mostrarPersona'])->name('mostrar-persona');