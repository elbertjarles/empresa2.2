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

//Route::post('/', 'ProductController@products');
Route::get('/', 'ProductController@products');

//Chamando o controllador
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');

//Rotas para parte de POSTS
Route::get('/products/form-adicionar', 'ProductController@formAdicionar');
Route::post('/products/adicionar', 'ProductController@adicionar');
Route::get('/products/excluir/{id}', 'ProductController@excluir');
Route::get('/products/editar/{id}', 'ProductController@form_editar');
Route::post('/products/editar', 'ProductController@editar');
