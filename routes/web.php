<?php


// Login Routes
Route::get('/', ['as' => 'login', 'uses' => 'App\Http\Controllers\LoginController@index']);
Route::post('/login/authenticate', ['as' => 'login.authenticate', 'uses' => 'App\Http\Controllers\LoginController@authenticate']);

// Assay Computação Routes
Route::get('/personalDataSuperior', ['as' => 'personalDataSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@personalData']);
Route::get('/knowledgeSuperior', ['as' => 'knowledgeSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@knowledge']);

// Assay Informatica Routes
Route::get('/personalDataTecnico', ['as' => 'personalDataTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@personalData']);
Route::get('/knowledgeTecnico', ['as' => 'knowledgeTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@knowledge']);