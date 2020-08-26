<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','ImgController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
//Grupo protegido pelo auth
Route::middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/registrar', 'RegistrarController@index');
    Route::post('/registrar', 'RegistrarController@registro');
    Route::put('/registrar/{id}', 'RegistrarController@registroEdit');
    Route::get('/registrar/{id}', 'RegistrarController@registroDelete');

    Route::get('/find/{id}', 'RegistrarController@findRegistro')->name('find');
    Route::get('/tipos', 'RegistrarController@tr');

//Controllers de Relatórios

    Route::get('/relatorios', 'RelatoriosController@relatorios');
    Route::post('/relatorios', 'RelatoriosController@relatorios');

//Controllers de configurações gerais


    Route::get('/config','ImgController@indexConfig');
    Route::post('/','ImgController@store');
    Route::get('/config/destroy/{id}', 'ImgController@destroy');

});


