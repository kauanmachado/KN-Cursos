  @extends('template')
  @section('content')
  
  <div class="row mt-5">
    <div class = 'container'>
        <div class='container mt-5'>
        <h2 class = 'text-center'>LISTA DE CURSOS</h2>
        </div>
    </div>
    
    
    <div class='container col-8 m-auto'>
    <table class="table table-dark rounder">
  <thead class='thead-dark'>
    <tr>
        <th scope='col'>Titulo</th>
        <th scope='col'>Preço R$</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Arquivo</th>
        <th scope='col'>Ações</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($curso as $cursos)
    <tr>
      <td>{{$cursos->titulo}}</td>
      <td>{{$cursos->preco}}</td>
      <td>{{$cursos->descricao}}</td>
      <td>
        @if(isset($cursos->imagem))
        <img src="{{asset("{storage/$cursos->imagem}")}}">
        @else
        <img src="https://i.pinimg.com/236x/bd/5d/6e/bd5d6ec5f3af0974320f1209faca2ce3.jpg" width="80" height="80">
        @endif

      </td>
      <td>

        <form action="{{url('/cursos/editar/'.$cursos->id)}}" method="GET" class="mt-1">
          <button class="btn btn-primary">Editar</button>
        </form>
        
        <form action="{{url('/cursos/'.$cursos->id)}}" method="POST" class="mt-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Excluir</button>
        </form>
      </td>

            
          

        

      </td>
    </tr>
      @endforeach

  </tbody>
</table>
    </div>
  <div class="container">
    <a href="{{url('/cursos/cadastro')}}" class="">
          <button class="btn btn-success">Cadastrar curso</button>
        </a>
        </div>
        </div>
    
    </body>
    @endsection