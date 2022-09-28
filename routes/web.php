<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Auth;


Route::get('/cursos', [cursoController::class, 'cursos'])->name('cursos');


Route::get('/', [cursoController::class, 'principal'])->name('principal');

//ROTA PARA CREATE
Route::get('/cursos/cadastro', [cursoController::class, 'create'])->name('create');
Route::post('/cursos', [cursoController::class, 'store']);

//ROTA DE LOGIN E CADASTRO
Route::get('/login', [cursoController::class, 'login'])->name('login');


Route::get('/cadastro', [cursoController::class, 'cadastro']);
Route::get('/cadastrar', [cursoController::class, 'cadastrar']);

//ROTA PARA DELETE
Route::delete('/cursos/{id}', [cursoController::class, 'destroy']);

//ROTA PARA EDIT
Route::get('/cursos/editar/{id}', [cursoController::class, 'edit']);
Route::put('/cursos/atualizar/{id}', [cursoController::class, 'update'])->name('atualizar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
