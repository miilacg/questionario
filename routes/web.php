<?php


// Login Routes
Route::get('/', ['as' => 'login', 'uses' => 'App\Http\Controllers\LoginController@index']);
Route::post('/login/authenticate', ['as' => 'login.authenticate', 'uses' => 'App\Http\Controllers\LoginController@authenticate']);

// Assay Computação Routes
Route::get('/companySuperior', ['as' => 'companySuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@company']);
Route::get('/knowledgeSuperior', ['as' => 'knowledgeSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@knowledge']);
Route::get('/laborMarketSuperior', ['as' => 'laborMarketSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@laborMarket']);
Route::get('/laborMarketSuperior', ['as' => 'laborMarketSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@laborMarket']);
Route::get('/personalDataSuperior', ['as' => 'personalDataSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@personalData']);
Route::get('/professionalDataSuperior', ['as' => 'professionalDataSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@professionalData']);

// Assay Informatica Routes
Route::get('/companyTecnico', ['as' => 'companyTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@company']);
Route::get('/laborMarketTecnico', ['as' => 'laborMarketTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@laborMarket']);
Route::get('/laborMarketTecnico', ['as' => 'laborMarketTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@laborMarket']);
Route::get('/personalDataTecnico', ['as' => 'personalDataTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@personalData']);
Route::get('/professionalDataTecnico', ['as' => 'professionalDataTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@professionalData']);