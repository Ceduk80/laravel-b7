@extends('layout')

@section('titulo', 'Meu site - Contato')


@section('content')
<h1>Contato</h1>

Hoje é dia {{ $qualquer_coisa }}

<a href=" {{ Route('home_page') }}">Voltar para Home</a> <br>
<a href=" {{ Route('services_page') }}">Saiba mais sobre os nossos serviços</a> <br>
@endsection