<?php

use Illuminate\Support\Facades\Route;
/*esto es de cenix*/
use App\Http\Controllers\homeController;
use App\Http\Controllers\CenixController;

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

Route::get('/', function () {
    return view('welcome');
});



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
/*esto es de cenix*/
Route::get('about',[CenixController::class,'about']);
Route::get('contact',[CenixController::class,'contact'])->name('contact.blade');
Route::get('mantenimiento',[CenixController::class,'mantenimiento']);
Route::get('proyectos',[CenixController::class,'proyectos']);
Route::get('servicios',[CenixController::class,'servicios']);
Route::get('software',[CenixController::class,'software']);
Route::get('soluciones',[CenixController::class,'soluciones']);
//Formulario POST
Route::post('contact', [CenixController::class,'store'])->name('cenix.store');


//las variables de las rutas van de ultimnas


//Route::get('/{*}',[CenixController::class,'404NotFound']);


//Route::get('cenix/{NuestrosProyectos}/{Software?}',[CenixController::class,'show']);