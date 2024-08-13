<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create');

Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');

Route::get('produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@show');

Route::get('produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');

Route::post('produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');

Route::get('produto/excluir/{id}','App\Http\Controllers\ProdutosController@delete');

Route::post('produto/excluir/{id}','App\Http\Controllers\ProdutosController@destroy')->name('deletar_produto');