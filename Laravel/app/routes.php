<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('usuarios', array('as'=>'usuarios','uses'=>'UsuariosController@index'));
Route::get('pessoas',array('as'=>'pessoas','uses'=>'PessoasController@index'));
Route::resource('usuarios','UsuariosController');
Route::resource('pessoas','PessoasController');
Route::get('usuario/(:any)', array('as'=>'usuario','uses'=>'UsuariosController@view'));
