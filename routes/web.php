<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::name('clientes.')
    ->prefix('clientes')
    ->controller(ClienteController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{cliente}/show', 'mostrar')->name('mostrar');
        Route::get('/cadastrar', 'cadastrar')->name('cadastrar');
        Route::get('/{cliente}/editar', 'editar')->name('editar');
        Route::post('/salvar', 'salvar')->name("salvar");
        Route::put('/{cliente}/atualizar', 'atualizar')->name("atualizar");
        Route::delete('/{cliente}/excluir', 'excluir')->name('excluir');
    });
