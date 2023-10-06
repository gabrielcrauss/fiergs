<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "\App\Http\Controllers\PrincipalController@principal")->name('site.index');

//Login
Route::get('/login/{erro?}', "\App\Http\Controllers\LoginController@index")->name('site.login');
Route::post('/login', "\App\Http\Controllers\LoginController@login")->name('site.login');

// Logout
Route::get('/logout', "\App\Http\Controllers\LogOutController@index")->name('site.logout');

// Produtos
Route::get('/produtos/{produto}', "\App\Http\Controllers\ProdutosController@show")->name('site.produtos');
Route::get('/produtos/{produto}/{msg}', "\App\Http\Controllers\ProdutosController@editar")->name('site.produto.editar');
Route::get('/produtos', "\App\Http\Controllers\ProdutosController@index")->name('site.produtos');
Route::post('/produtos', "\App\Http\Controllers\ProdutosController@salvar")->name('site.produtos');
Route::post('/produtos/{produto}/', "\App\Http\Controllers\ProdutosController@delete")->name('site.produto.delete');

// Categorias
Route::get('/categorias', "\App\Http\Controllers\CategoriaController@index")->name('site.categorias');
Route::post('/categorias', "\App\Http\Controllers\CategoriaController@salvar")->name('site.categorias');

// FallBack
Route::fallback(function()
{ 
    echo 'Página não encontrada! <a href="' . route('site.index') . '"> Voltar </a>';
});

