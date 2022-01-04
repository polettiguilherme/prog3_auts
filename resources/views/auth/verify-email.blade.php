@extends('templates.verify')
@section('title', 'Inserir Produto')

@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
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
              Olá, {{ Auth::user()->nome }}!
              <a href="{{ route('logout') }}" role="button" class="btn btn-outline-danger">Sair</a>
            @else
              <a href="{{ route('login') }}" role="button" class="btn btn-outline-light me-2">Login</a>
              <a href="{{ route('usuarios.inserir') }}" role="button" class="btn btn-warning">Cadastro</a>
            @endif
          </div>
        </div>
      </div>
  </header>

  <main class="px-3">
    <h1>Olá!</h1>
    <p class="lead">Apenas precisamos verificar seu e-mail antes que você possa acessar nosso portal.<br> Obrigado! </p>
    
  </main>

  <footer class="mt-auto text-white-50">
    <p> &copy; All rights reserved</p>
  </footer>
</div>
@endsection