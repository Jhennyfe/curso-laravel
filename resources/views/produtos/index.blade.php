@extends('layout.app')
@section('title','Listagem')
@section('content')
    <h1> Listagem de Produtos (<a href="{{route('produtos.criar')}}"> + </a>)</h1>

    <ul>
    @foreach($produtos as $produto)<!-- em $users, é o array, a tabela inteira, em $user é só uma linha -->
        <li>
        {{$produto->name}} - 
        <a href="{{ route('produto.show', $produto->id)}}"> (detalhes) </a>
        <a href="{{ route('produto.edit', $produto->id)}}"> (editar) </a>
        </li>
    @endforeach
    </ul>

@endsection