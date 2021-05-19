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

Route::get('/','UserController@index');
Route::get('/addUser','UserController@create');
Route::post('/user-add','UserController@store');
Route::get('/user/delete/{id}','UserController@delete');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/edit/{id}','UserController@edit');
