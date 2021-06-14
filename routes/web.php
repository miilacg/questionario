<?php


// Login Routes
Route::get('/', ['as' => 'login', 'uses' => 'App\Http\Controllers\LoginController@index']);
Route::post('/login/authenticate', ['as' => 'login.authenticate', 'uses' => 'App\Http\Controllers\LoginController@authenticate']);

// Resultado Routes
Route::get('/resultado', ['as' => 'resultado', 'uses' => 'App\Http\Controllers\GeneralController@result']);

// Assay Computação Routes
Route::get('/companySuperior', ['as' => 'companySuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@company']);
Route::get('/knowledgeSuperior', ['as' => 'knowledgeSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@knowledge']);
Route::get('/laborMarketSuperior', ['as' => 'laborMarketSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@laborMarket']);
Route::get('/leisureHealthCitizenchipSuperior', ['as' => 'leisureHealthCitizenchipSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@leisureHealthCitizenchip']);
Route::get('/personalDataSuperior', ['as' => 'personalDataSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@personalData']);
Route::get('/professionalDataSuperior', ['as' => 'professionalDataSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@professionalData']);
Route::get('/satisfactionSuperior', ['as' => 'satisfactionSuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@satisfaction']);
Route::get('/technologySuperior', ['as' => 'technologySuperior', 'uses' => 'App\Http\Controllers\AssaySuperiorController@technology']);

// Assay Informatica Routes
Route::get('/companyTecnico', ['as' => 'companyTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@company']);
Route::get('/laborMarketTecnico', ['as' => 'laborMarketTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@laborMarket']);
Route::get('/leisureHealthCitizenchipTecnico', ['as' => 'leisureHealthCitizenchipTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@leisureHealthCitizenchip']);
Route::get('/personalDataTecnico', ['as' => 'personalDataTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@personalData']);
Route::get('/professionalDataTecnico', ['as' => 'professionalDataTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@professionalData']);
Route::get('/satisfactionTecnico', ['as' => 'satisfactionTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@satisfaction']);
Route::get('/technologyTecnico', ['as' => 'technologyTecnico', 'uses' => 'App\Http\Controllers\AssayTecnicoController@technology']);