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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('persona','PersonaController@index')->name('persona.index');
 Route::get('persona/nuevo','PersonaController@create')->name('persona.create');
 Route::post('persona/guardar','PersonaController@store')->name('persona.store');
