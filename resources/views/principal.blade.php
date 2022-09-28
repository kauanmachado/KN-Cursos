@extends('template')



@section('content')
<div class="container mt-5 border bg-light rounded-pill shadow-lg">
    <h1 class="text-center  mt-4">Seja bem-vindo ao KN Cursos!</h1>
    <p class="text-center ">Para acessar sua página de cursos clique no botão abaixo.</p>
    <div class="d-grid gap-2 col-2 mx-auto mt-5 my-3">
  <button class="btn btn-primary btn-lg " type="button"><a href="{{ route('cursos') }}" class="text-white text-decoration-none">Acessar cursos</a></button>

</div>
</div>


@endsection
 