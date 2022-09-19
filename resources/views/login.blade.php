@extends('template')

@section('content')

<div class="row mt-3">
<div class="container mt-5 col-4">
<h2>Login</h2>
<div class="form-floating mb-3">
<label for="floatingInput">Email</label>
  <input type="email" class="form-control" id="floatingInput" placeholder="Digite seu e-mail">
</div>
<div class="form-floating">
    <label for="floatingPassword">Senha</label>
  <input type="password" class="form-control" id="floatingPassword" placeholder="Digite sua senha">
  
</div>
<button type="button" class="btn btn-success mt-4">Efetuar login</button>
</div>
</div>
@endsection