<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pre_Alternativa_Multiple
//Pre_Desarrollo_Corto
//Pre_Desarrollo_Largo
//Pre_Emparejar
//Pre_Verdadero_Falso
//Gen_Examen
//Gen_Preguntas

//-----------------------
//Main_Profesor
//Main_Alumno
Route::get('/', function () {
    return view('Main_Alumno');
});

Route::get('generar_pregunta', function () {
    return view('Pre_Verdadero_Falso');
});
Route::get('pregunta_desarrollo_largo', function () {
    return view('Pre_Desarrollo_Largo');
});
Route::get('pregunta_desarrollo_corto', function () {
    return view('Pre_Desarrollo_Corto');
});
Route::get('pregunta_alternativa_multiple', function () {
    return view('Pre_Alternativa_Multiple');
});
Route::get('pregunta_emparejar', function () {
    return view('Pre_Emparejar');
});
Route::get('pregunta_verdadero_falso', function () {
    return view('Pre_Verdadero_Falso');
});
Route::get('generar_examen', function () {
    return view('Gen_Examen');
});