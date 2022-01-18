@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<div class="produto">
    <h1>{{ $prod->nome }}</h1>
    <p><img class="img-fluid" src="{{asset('img/' . $prod->img)}}"></p>
    <p>Preço: R$ {{$prod->preco}}</p>
    <p>Descrição do produto: {{ $prod->descricao }}</p>
</div>

@endsection