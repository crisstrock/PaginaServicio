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

Route::get("/", "FrontController@index");
Route::get("admin","FrontController@admin");

Route::resource('usuario','UsuarioController');
Route::resource('mail','MailController');

Route::get('lugares', 'LugarController@listing');
Route::resource('lugar', 'LugarController');

Route::resource('mobi', 'MobiController');


Route::resource('pc', 'PcController');

Route::resource('revisionrap', 'RevisionController');
Route::resource('revisiondet', 'RevisionDetController');

Route::resource('exist', 'ExisteController');

Route::get('password/email','Auth\ResetPasswordController@getEmail');
Route::post('password/email','Auth\ResetPasswordController@postEmail');

Route::resource('login', 'LoginController');
Route::get('logout', 'LoginController@logout');