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

    return view('tutor.grados.listargrado');
})->name('/pruebaD');


//pruebas manzano
Route::get('/pruebaM', function () {
    return view('tutor.practicas.practicas
    ');
})->name('/pruebaM');




Route::get('/', function () {
    return view('index');
})->name('/');

Route::prefix('/sgd')->group(function(){

  //rutas para las practicas
  Route::get('/metodologias','User\FlavorController@index')->name('metodologias');
  Route::get('/metodologia','User\FlavorController@indexmet')->name('metodologia');
  Route::get('/crear-metodologia/paso1','User\FlavorController@createp1')->name('crearmetodp1');
  Route::post('/store-metodologia/proceso-colaborativo','User\FlavorController@store_Collaborative_Process')->name('salvarmetodp1');
  Route::post('/store-metodologia/equipo','User\FlavorController@store_Team')->name('salvarmetodp2');
  Route::delete('/borrar-metodologia','User\FlavorController@delete')->name('borrarmetodologia');


  //rutas para los estudiantes
  Route::get('/estudiantes','User\ChildController@index')->name('estudiantes');
  Route::get('/crear-estudiante','User\ChildController@create')->name('crearestudiante');
  Route::post('/salvar-estudiante','User\ChildController@store')->name('salvarestudiante');

  Route::get('/editar-estudiante/{id}','User\ChildController@edit')->name('editarestudiante');
  Route::get('/actualizar-estudiante/{id}','User\ChildController@update')->name('actualizarestudiante');
  Route::delete('/borrar-estudiante','User\ChildController@delete')->name('borrarestudiante');

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
  Route::get('/grados-institution','User\InstitutionController@indexgxi')->name('gradosinstituciones');
  Route::get('/crear-grado','User\InstitutionController@createg')->name('creargrado');
  Route::post('/salvar-grado','User\InstitutionController@storeg')->name('salvargrado');
  Route::get('/editar-grado/{id}','User\InstitutionController@editg')->name('editargrado');
  Route::delete('/borrar-grado','User\InstitutionController@deleteg')->name('borrargrado');
  Route::get('/actualizar-grado/{id}','User\InstitutionController@updateg')->name('actualizargrado');

  //rutas para las Actividades
  Route::get('/actividades','User\ChildLetTaskController@index')->name('actividades');
  Route::get('/actividades-metodologia','User\ChildLetTaskController@indexmetod')->name('actividadesmetod');

  Route::get('/crear-actividad','User\ChildLetTaskController@create')->name('crearactividad');
  Route::post('/salvar-actividad','User\ChildLetTaskController@store')->name('salvaractividad');
  Route::get('/getactividades/{id}','User\ChildLetTaskController@getActividades')->name('getactividades');

  //rutas para las practicas
  Route::get('/practicas','User\PracticeController@index')->name('practicas');
  Route::get('/practicas-actividad','User\PracticeController@indexAct')->name('practicasact');
  Route::get('/crear-practica','User\PracticeController@create')->name('crearpractica');
  Route::post('/salvar-practica','User\PracticeController@storep')->name('salvarpractica');
  Route::post('/salvar-practica-smt','User\PracticeController@storepsmt')->name('salvarpracticasmt');
  Route::post('/salvar-practica-genero','User\PracticeController@storepgen')->name('salvarpracticagenero');






});
