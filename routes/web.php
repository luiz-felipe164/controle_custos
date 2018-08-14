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

Route::get('/home',['as'=>'admin.home','uses'=>'Admin\HomeController@index']);
Route::get('/funcionario/add',['as'=>'admin.funcionario.add','uses'=>'Admin\FuncionarioController@add']);
Route::get('/funcionario/salvar',['as'=>'admin.funcionario.salvar','uses'=>'Admin\FuncionarioController@salvar']);