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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('empresas','EmpresaController');
Route::resource('areas','AreaController');
Route::resource('avaliacoes','EvaluationController');
Route::get('areas/get/{id}', 'EvaluationController@getStates');

