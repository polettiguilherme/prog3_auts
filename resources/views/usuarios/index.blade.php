@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de usuários</p>

        <a class="btn btn-primary" href="{{route('usuarios.inserir')}}" role="button">Cadastrar usuário</a>

    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>E-mail</th>
        </tr>

        @foreach ($usuarios as $usuario)
            @if ($usuario->admin == 1)
                <tr class="table-primary">
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
            @else
                <tr class="table-light">
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
            @endif            
        @endforeach
    </table>
</div>
@endsection