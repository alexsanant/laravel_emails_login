<?php

//Importamos la clase Route
use Illuminate\Support\Facades\Route;



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

//Ruta para el home
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Ruta para la página de envío de correo electrónicos
//Indicamos el controlador pasándole el método class, y el método encargado será el index().
Route::get('contactanos', [App\Http\Controllers\ContactanosController::class,'index'])->name('contactanos.index');


//Ruta encargada de procesar el formulario de contactos
Route::post('contactanos', [App\Http\Controllers\ContactanosController::class, 'store'])->name('contactanos.store');


//Ruta que nos devolverá el formulario de inserción de registros
Route::get('/create', function() {
  return view('/productos/registro');
  });
