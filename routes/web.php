<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoController;


Route::get('/cursos', [cursoController::class, 'index']);

//TEMPLATE
Route::get('/', [cursoController::class, 'template']);

//ROTA PARA CREATE
Route::get('cursos/cadastro', [cursoController::class, 'create']);
Route::post('/cursos', [cursoController::class, 'store']);

//ROTA DE LOGIN E CADASTRO
Route::get('/login', [cursoController::class, 'login']);
Route::get('/cadastro', [cursoController::class, 'cadastro']);

//ROTA PARA DELETE
Route::delete('/cursos/{id}', [cursoController::class, 'destroy']);

//ROTA PARA EDIT
Route::get('/cursos/editar/{id}', [cursoController::class, 'edit']);
Route::put('/cursos/atualizar/{id}', [cursoController::class, 'update']);


