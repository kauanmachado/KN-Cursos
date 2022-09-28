@extends('template')
@section('content')



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">CADASTRO DE CURSO</div>
                <div class="card-body">
                    <form method="POST" action="{{url('/cursos')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="titulo" class="col-md-4 col-form-label text-md-end">Titulo</label>
                            <div class="col-md-6">
                                <input id="titulo" type="titulo" class="form-control" name="titulo"  placeholder="Digite o titulo do curso" autofocus required>
                            </div>
                            
                        </div>



                        <div class="row mb-3">
                            <label for="preco" class="col-md-4 col-form-label text-md-end">Preço</label>
                            <div class="col-md-6">
                            <input type="number" class="form-control" id="preco"  name="preco" placeholder="Digite o preço" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="descricao" class="col-md-4 col-form-label text-md-end">Descrição do curso</label>
                            <div class="col-md-6">
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="formFile" class="col-md-4 col-form-label text-md-end">Escolha sua imagem</label>
                            <div class="col-md-6">
                            
                            <input class="form-control" type="file" id="imagem" name="imagem" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" action="{{ route('cursos') }}">
                                    Cadastrar curso
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection