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
//Pre_Alternativa_Multiple ;
//Pre_Desarrollo_Corto  ;
//Pre_Desarrollo_Largo  ;
//Pre_Emparejar
//Pre_Verdadero_Falso

// -------------------Gen_Preguntas
Route::get('/', function () {
    return view('Pre_Emparejar');
});

Route::get('dashboard', function () {
    return view('dashboard.blade.php');
});
