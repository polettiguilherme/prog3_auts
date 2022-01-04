<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        .container-profile {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        height: 80vh;
        }

        .container-profile .profile {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        width: 50%;
        height: 100%;
        border: 1px solid lightgrey;
        }

        .container-profile .profile div {
        margin: 15px;
        }

        .container-profile .profile .picture {
        height: 230px;
        width: 230px;
        border-radius: 50%;
        border: 1px solid grey;
        }

        .container-profile .profile .picture img {
        height: 100%;
        width: 100%;
        border-radius: 50%;
        -o-object-fit: cover;
            object-fit: cover;
        }

        .container-profile .profile .name, .container-profile .profile .user, .container-profile .profile .email {
        height: 50px;
        width: 40%;
        border-bottom: 1px solid grey;
        background-color: white;
        padding: 5px;
        font-size: large;
        }

        .container-profile .profile .label {
        margin: 0;
        font-size: small;
        color: grey;
        }

        .container-profile .profile .edit {
        background: lightgrey;
        border-radius: 4px;
        }

        .container-profile .profile .edit :hover {
        background: #a3a3a3;
        -webkit-transition: 0.2s;
        transition: 0.2s;
        }
    </style>
</head>
<body>

  <header class="p-3 bg-dark text-white mb-3">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('home')}}" class="nav-link px-2 @if ($pagina == 'home') text-secondary @else text-white @endif">Inicial</a></li>
            <li><a href="{{route('produtos')}}" class="nav-link px-2 @if ($pagina == 'produtos') text-secondary @else text-white @endif">Produtos</a></li>
            <li><a href="/usuarios" class="nav-link px-2 @if ($pagina == 'usuarios') text-secondary @else text-white @endif">Usuários</a></li>
          </ul>

          <div class="text-end">
            @if (Auth::user())
              Olá, <a href="{{ route('profile') }}" class="text-white">{{ Auth::user()->nome }}!</a>
              <a href="{{ route('logout') }}" role="button" class="btn btn-outline-danger">Sair</a>
            @else
              <a href="{{ route('login') }}" role="button" class="btn btn-outline-light me-2">Login</a>
              <a href="{{ route('usuarios.inserir') }}" role="button" class="btn btn-warning">Cadastro</a>
            @endif
          </div>
        </div>
      </div>
  </header>

   

        <!-- Conteúdo -->
        @yield('content')

    
</body>
</html>