@extends('template')
@section('content')


<div class="row mt-3">
<div class="container mt-5 col-4">
    <h2>Cadastrar curso</h2>
    <form name='formCad' id='formCad' method='POST' action='{{url('/cursos')}}'>
        @csrf
        <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo do curso">
        </div>
        <label for="usuario" class="form-label">Usuario</label>
        <select class="form-control" name="id_user" id="id_user">
            <option value="">Selecione</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

        <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco"  name="preco" placeholder="Digite o preço">
        </div>

        <div class="mb-3">
        <label for="descricao" class="form-label">Descrição do curso</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>

        <div class="mb-3">
        <label for="formFile" class="form-label">Escolha seu arquivo</label>
        <input class="form-control" type="file" id="formFile">
        </div>

        <button class="btn btn-success" action="{{url('/')}}">Cadastrar curso</button>
    </form>
</div>
</div>