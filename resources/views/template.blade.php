<!DOCTYPE html>
<html lang ="pt-br"> 
    <head>
        <!-- boostrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
      
    </head>
    
    <body>
    @yield('content')
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm fixed-top">
        <div class="container">
        <a class="navbar-brand text-white" href="{{url('/cursos')}}">KN Cursos</a>

            <div class="collapse navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
        
                </ul>
                <ul class="navbar-nav ml-auto">
                
                   <li class="nav-item"> 
                    <a class="nav-link text-white" href="{{url('/login')}}">Login</a>
                   </li>

                   <li class="nav-item"> 
                    <a class="nav-link text-white" href="{{url('/cadastro')}}">Cadastro</a>
                   </li>
                </ul>

            </div>
        </div>

    </nav>
</body>


<html>