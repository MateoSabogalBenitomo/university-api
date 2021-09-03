<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',    'AuthController@authenticate');
Route::post('register', 'AuthController@register');
Route::post('logout', 'AuthController@logout');

// Estudiante y sus alergias y consumo
Route::get('get-estudiantes',    'EstudianteController@index');

// Consumo dada una fecha
Route::get('get-consumo',    'ConsumoCafeteriaController@index');

// Determinar el nombre de un niño que tienen solo un acudiente
Route::get('estudiante-solo-acudiente',  'EstudianteController@estudianteSoloAcudiente');

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::post('cambiar_password', 'AuthController@cambiarPSD');

     // Aplicativo o módulo
     Route::group(['namespace' => 'Proyecto_Nuevo'], function()
     {
         Route::post('get' ,'ObjetoController@index');
         Route::post('find' ,'ObjetoController@buscar');
         Route::post('create','ObjetoController@store');
         Route::post('edit','ObjetoController@edit');
         Route::post('delete','ObjetoController@destroy');

     });

});
