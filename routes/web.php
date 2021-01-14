<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', homeController::class)->name('home');
Route::resource('cursos', cursoController::class);
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.store');

/*En el caso de que quiera que el jefe me pida que 
cambie el nombre 'cursos' por 'asignaturas', para no 
cambiar manualmente las variables en las funciones 
y vistas se hace lo siguiente:

Route::resource('asignaturas', cursoController::class)
->parameters(['asignaturas'=>'curso'])
->names('cursos');

*/
