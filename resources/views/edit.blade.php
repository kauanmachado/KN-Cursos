@extends('template')
@section('content')


<div class="row mt-3">
<div class="container mt-5 col-4">
    <h2>Editar curso ({{$curso->titulo}})</h2>
    <form name='formCad' id='formCad' method='POST' action="/crudpi/public/cursos/atualizar/{{$curso->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="titulo" class="form-label" >Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo do curso" value="{{$curso->titulo}}">
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
        <input type="number" class="form-control" id="preco"  name="preco" placeholder="Digite o preço" value="{{$curso->preco}}">
        </div>

        <div class="mb-3">
        <label for="descricao" class="form-label">Descrição do curso</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3" value="{{$curso->descricao}}"></textarea>
        </div>

        <button class="btn btn-success" action="{{url('/')}}">Editar curso</button>
    </form>
</div>
</div>