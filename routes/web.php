<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pessoas', 'App\Http\Controllers\PessoaController@index');
Route::get('/pessoas/adiciona', 'App\Http\Controllers\PessoaController@create');
Route::post('/pessoas/adiciona', 'App\Http\Controllers\PessoaController@store');
Route::get('/pessoas/edita', 'App\Http\Controllers\PessoaController@edit');
Route::post('/pessoas/edita', 'App\Http\Controllers\PessoaController@update');