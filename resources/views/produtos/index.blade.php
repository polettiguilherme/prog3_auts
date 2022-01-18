@extends('templates.base')
@section('title', 'Produtos')
@section('h1', 'Página de Produtos')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de produtos</p>

        <a class="btn btn-primary" href="{{route('produtos.inserir')}}" role="button">Cadastrar produto</a>
    </div>
</div>


<div class="galeria">

        {{-- pega os produtos da controller, percorre o array e mostra todos --}}

        @foreach($prods as $prod)
        <div class="produto">
            
                <div class="img">
                    <img class="img-fluid" src="{{asset('img/' . $prod->img)}}">
                </div>    
                <div class="nome">
                    <a href="{{ route('produtos.show', $prod) }}">{{$prod->nome}}</a>
                </div>
                <div class="preco">
                    R$ {{$prod->preco}}
                </div>
            

        </div>
        @endforeach
    
</div>

@endsection
