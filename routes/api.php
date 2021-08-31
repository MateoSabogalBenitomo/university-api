<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',    'AuthController@authenticate');
Route::post('register', 'AuthController@register');
Route::post('logout', 'AuthController@logout');

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
