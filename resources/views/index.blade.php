  @extends('template')
  @section('content')
  



        <h1 class = 'text-center my-3'>CURSOS</h1>
        <hr>

    
    
    <div class='container col-8 m-auto border rounded shadow-lg' style="background-color: #c0c0c0">
    <div class="d-grid gap-2 col-2 mx-auto my-3 " >

          <button class="btn btn-primary btn-lg"><a href="{{route('create')}}" class="text-white text-decoration-none">Cadastrar curso</a></button>
        </div>
    <table class="table table-light table-striped">
  <thead class='thead-dark'>
    <tr>
        <th scope='col'>ID do Usuario</th>
        <th scope='col'>Titulo</th>
        <th scope='col'>Preço R$</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Imagem</th>
        <th scope='col'>Ações</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($curso as $cursos)
    <tr>
      <td>{{$cursos->id_user}}</td>
      <td>{{$cursos->titulo}}</td>
      <td>{{$cursos->preco}}</td>
      <td>{{$cursos->descricao}}</td>
      <td>
        @if(isset($cursos->imagem))
        <img src="{{asset("storage/{$cursos->imagem}")}}" height="80" width="75">
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
      {{$curso->links()}}
    </div>
  

    
    </body>
    @endsection