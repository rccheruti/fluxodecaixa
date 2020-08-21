<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','ImgController@index');

Auth::routes();

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth')->group(function(){
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registrar', 'RegistrarController@index')->name('registrar');

Route::post('/registrar/entrada', 'RegistrarController@entrada')->name('entrada');
Route::get('/registrar/editar/entrada/{id}', 'RegistrarController@editarEntrada')->name('editarEntrada');
Route::get('/registrar/apagar/entrada/{id}', 'RegistrarController@apagarEntrada')->name('apagarEntrada');

Route::post('/registrar/saida', 'RegistrarController@saida')->name('saida');
Route::get('/registrar/editar/saida/{id}', 'RegistrarController@editarSaida')->name('editarSaida');
Route::get('/registrar/apagar/saida/{id}', 'RegistrarController@apagarSaida')->name('apagarSaida');

Route::post('/registrar/retirada', 'RegistrarController@retirada')->name('retirada');
Route::get('/registrar/editar/retirada/{id}', 'RegistrarController@editarRetirada')->name('editarRetirada');
Route::get('/registrar/apagar/retirada/{id}', 'RegistrarController@apagarRetirada')->name('apagarRetirada');

Route::post('/registrar/dfm', 'RegistrarController@dfm')->name('dfm');
Route::get('/registrar/editar/dfm/{id}', 'RegistrarController@editarDfm')->name('editarDfm');
Route::get('/registrar/apagar/dfm/{id}', 'RegistrarController@apagarDfm')->name('apagarDfm');

Route::post('/registrar/dfa', 'RegistrarController@dfa')->name('dfa');
Route::get('/registrar/editar/dfa/{id}', 'RegistrarController@editarDfa')->name('editarDfa');
Route::get('/registrar/apagar/dfa/{id}', 'RegistrarController@apagarDfa')->name('apagarDfa');


Route::get('/relatorios', 'RelatoriosController@relatorios')->name('relatoriosGet');
Route::post('/relatorios', 'RelatoriosController@relatorios')->name('relatoriosPost');

Route::get('/config', 'ConfigController@index')->name('config');

Route::post('/','ImgController@store')->name('storeImg');

Route::get('/config','ImgController@indexConfig')->name('configImg');

Route::get('/config/destroy/{id}', 'ImgController@destroy');


});
