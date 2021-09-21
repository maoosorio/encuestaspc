<?php

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

Route::group(['prefix' => 'admin', 'middleware' => 'is.admin', 'as'=> 'admin.'], function () {
    Route::get('/', 'AdminDashboardController@index')->name('dashboard');
    Route::resource('vehicle', 'AdminVehicleController');
});

Route::group(['prefix' => 'post', 'middleware' => ['auth']], function(){
        Route::get('all','Controller@post');
        Route::get('user','Controller@post');
    })
*/
Route::get('/', 'DashboardController@inicio')->name('inicio');
Route::get('inactivo', function(){ return view('inactivo'); })->name('inactivo');

Route::group(['middleware' => 'auth:web'], function() {
    Route::get('logout', 'DashboardController@logout')->name('logout');
    #CRUD ENCUESTAS
    Route::get('encuestas', 'EncuestasController@inicio')->name('encuestas');
    Route::get('agregarEncuesta', 'EncuestasController@agregarEncuesta')->name('agregarEncuesta');
    Route::post('guardarEncuesta', 'EncuestasController@guardarEncuesta')->name('guardarEncuesta');
    Route::get('editarEncuesta/{idEncuesta}', 'EncuestasController@editarEncuesta')->name('editarEncuesta');
    Route::post('modificarEncuesta', 'EncuestasController@modificarEncuesta')->name('modificarEncuesta');
    Route::post('borrarEncuesta', 'EncuestasController@borrarEncuesta')->name('borrarEncuesta');
    #CRUD PREGUNTAS
    Route::get('preguntas', 'PreguntasController@inicio')->name('preguntas');
    Route::get('agregarPregunta', 'PreguntasController@agregarPregunta')->name('agregarPregunta');
    Route::post('guardarPregunta', 'PreguntasController@guardarPregunta')->name('guardarPregunta');
    Route::get('editarPregunta/{idPregunta}', 'PreguntasController@editarPregunta')->name('editarPregunta');
    Route::post('modificarPregunta', 'PreguntasController@modificarPregunta')->name('modificarPregunta');
    Route::post('borrarPregunta', 'PreguntasController@borrarPregunta')->name('borrarPregunta');
    #CRUD RESPUESTAS
    Route::post('agregarRespuesta', 'PreguntasController@agregarRespuesta')->name('agregarRespuesta');
    Route::post('quitarRespuesta', 'PreguntasController@quitarRespuesta')->name('quitarRespuesta');
    #CRUD ENCUESTADORES
    Route::get('encuestadores', 'EncuestadoresController@inicio')->name('encuestadores');
    Route::get('agregarEncuestador', 'EncuestadoresController@agregarEncuestador')->name('agregarEncuestador');
    Route::post('guardarEncuestador', 'EncuestadoresController@guardarEncuestador')->name('guardarEncuestador');
    Route::get('editarEncuestador/{idEncuestador}', 'EncuestadoresController@editarEncuestador')->name('editarEncuestador');
    Route::post('modificarEncuestador', 'EncuestadoresController@modificarEncuestador')->name('modificarEncuestador');
    Route::post('borrarEncuestador', 'EncuestadoresController@borrarEncuestador')->name('borrarEncuestador');
    #CRUD AJUSTES
    Route::get('ajustes', 'AjustesController@inicio')->name('ajustes');
    Route::get('agregarAjuste', 'AjustesController@agregarAjuste')->name('agregarAjuste');
    Route::post('guardarAjuste', 'AjustesController@guardarAjuste')->name('guardarAjuste');
    Route::get('editarAjuste/{idAjuste}', 'AjustesController@editarAjuste')->name('editarAjuste');
    Route::post('modificarAjuste', 'AjustesController@modificarAjuste')->name('modificarAjuste');
    Route::post('borrarAjuste', 'AjustesController@borrarAjuste')->name('borrarAjuste');
});
