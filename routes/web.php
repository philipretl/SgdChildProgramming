<?php

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


Route::get('/pruebaD', function () {

    return view('tutor.crearinstituciones');
})->name('/pruebaD');


//pruebas manzano
Route::get('/pruebaM', function () {
    return view('tutor.crearpractica.paso1
    ');
})->name('/pruebaM');




Route::get('/', function () {
    return view('index');
})->name('/');

Route::prefix('/sgd')->group(function(){

  //rutas para las practicas
  Route::get('/practicas','User\FlavorController@index')->name('practicas');

  //rutas para los estudiantes
  Route::get('/estudiantes','User\ChildController@index')->name('estudiantes');
  Route::get('/crear-estudiante','User\ChildController@create')->name('crearestudiante');
  Route::post('/salvar-estudiante','User\ChildController@store')->name('salvarestudiante');


  // rutas para las instituciones
  Route::get('/crear-institucion', function () {
      return view('tutor.institucion.crearinstituciones');
  })->name('crearinstituciones');

  Route::get('/instituciones','User\InstitutionController@index')->name('instituciones');
  Route::get('/editar-instituciones/{id}','User\InstitutionController@edit')->name('editarinstitucion');
  Route::get('/actualizar-instituciones/{id}','User\InstitutionController@update')->name('actualizarinstitucion');
  Route::post('/salvar-institucion','User\InstitutionController@store')->name('salvarinstitucion');
  Route::delete('/borrar-instituciones','User\InstitutionController@delete')->name('borrarinstitucion');
  Route::get('/getgrado/{id}','User\InstitutionController@getGrades')->name('getgrados');

  //rutas para los cursos
  Route::get('/grados','User\InstitutionController@indexg')->name('grados');
  Route::get('/crear-grado','User\InstitutionController@createg')->name('creargrado');
  Route::post('/salvar-grado','User\InstitutionController@storeg')->name('salvargrado');


});
