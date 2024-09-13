<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class,'index'] );
Route::get('/cadastro', [Home::class,'cadastro'] );
Route::post('/cadastrar', [Home::class,'cadastrar'] );
Route::post('/pesquisar', [Home::class,'pesquisar'] );
Route::get('/editar/{id}', [Home::class,'editar'] );
Route::post('/editar/{id}', [Home::class,'update'] );
Route::get('/remover/{id}', [Home::class,'remover'] );