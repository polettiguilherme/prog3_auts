@extends('templates.profile')
@section('title', 'Perfil')

@section('content')

<div class="container-profile">    
        <div class="profile">
            <div class="picture">
                <img src="{{ asset('images/eu.jpg') }}" alt="" class="picture-img">
            </div>
            <div class="name">
                <p class="label">Nome</p> 
                {{ Auth::user()->nome }}
            </div>
            <div class="user">
                <p class="label">Usuário</p> 
                {{ Auth::user()->username }}
            </div>
            <div class="email">
                <p class="label">Email</p> 
                {{ Auth::user()->email }}      
            </div>
            <div class="email">
                <p class="label">Senha</p> 
                {{ Auth::user()->password }}
            </div>
            
            <div class="edit">
                    <button class="btn "> <i class="bi bi-pencil-fill"></i> Editar Perfil  </button>
            </div>
            <div class="edit-senha">
                    <button class="btn "> <i class="bi bi-pencil-fill"></i> Editar Senha  </button>
            </div>
        </div>
        
    </div>


@endsection