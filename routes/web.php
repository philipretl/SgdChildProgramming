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

Route::get('/pruebaM', function () {
    return view('tutor.listarinstituciones');
})->name('/pruebaM');




Route::get('/', function () {
    return view('index');
})->name('/');

Route::prefix('/sgd')->group(function(){


  Route::get('/practicas','User\FlavorController@index')->name('practicas');

});
