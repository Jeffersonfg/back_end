<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("usuario", "App\Http\Controllers\UsuariosController@index");
Route::post("usuario", "App\Http\Controllers\UsuariosController@store");
Route::get("usuario/{id}", "App\Http\Controllers\UsuariosController@show");
Route::put("usuario/{id}", "App\Http\Controllers\UsuariosController@atualizar");
Route::delete("usuario/{id}", "App\Http\Controllers\UsuariosController@destroy");

Route::get("tipo_animal", "App\Http\Controllers\Tipo_animalsController@index");
Route::post("tipo_animal", "App\Http\Controllers\Tipo_animalsController@store");
Route::get("tipo_animal/{id}", "App\Http\Controllers\Tipo_animalsController@show");
Route::put("tipo_animal/{id}", "App\Http\Controllers\Tipo_animalsController@update");
Route::delete("tipo_animal/{id}", "App\Http\Controllers\Tipo_animalsController@destroy");

Route::get("sexo_animal", "App\Http\Controllers\Sexo_animalsController@index");
Route::post("sexo_animal", "App\Http\Controllers\Sexo_animalsController@store");
Route::get("sexo_animal/{id}", "App\Http\Controllers\Sexo_animalsController@show");
Route::put("sexo_animal/{id}", "App\Http\Controllers\Sexo_animalsController@update");
Route::delete("sexo_animal/{id}", "App\Http\Controllers\Sexo_animalsController@destroy");

Route::get("porte_animal", "App\Http\Controllers\Porte_animalsController@index");
Route::post("porte_animal", "App\Http\Controllers\Porte_animalsController@store");
Route::get("porte_animal/{id}", "App\Http\Controllers\Porte_animalsController@show");
Route::put("porte_animal/{id}", "App\Http\Controllers\Porte_animalsController@update");
Route::delete("porte_animal/{id}", "App\Http\Controllers\Porte_animalsController@destroy");

Route::get("foto", "App\Http\Controllers\FotosController@index");
Route::post("foto", "App\Http\Controllers\FotosController@store");
Route::get("foto/{id}", "App\Http\Controllers\FotosController@show");
Route::put("foto/{id}", "App\Http\Controllers\FotosController@update");
Route::delete("foto/{id}", "App\Http\Controllers\FotosController@destroy");

Route::get("estado", "App\Http\Controllers\EstadosController@index");
Route::post("estado", "App\Http\Controllers\EstadosController@store");
Route::get("estado/{id}", "App\Http\Controllers\EstadosController@show");
Route::put("estado/{id}", "App\Http\Controllers\EstadosController@update");
Route::delete("estado/{id}", "App\Http\Controllers\EstadosController@destroy");

Route::get("cidade", "App\Http\Controllers\CidadesController@index");
Route::post("cidade", "App\Http\Controllers\CidadesController@store");
Route::get("cidade/{id}", "App\Http\Controllers\CidadesController@show");
Route::put("cidade/{id}", "App\Http\Controllers\CidadesController@update");
Route::delete("cidade/{id}", "App\Http\Controllers\CidadesController@destroy");

Route::get("animal", "App\Http\Controllers\AnimalsController@index");
Route::post("animal", "App\Http\Controllers\AnimalsController@store");
Route::get("animal/{id}", "App\Http\Controllers\AnimalsController@show");
Route::put("animal/{id}", "App\Http\Controllers\AnimalsController@update");
Route::delete("animal/{id}", "App\Http\Controllers\AnimalsController@destroy");

