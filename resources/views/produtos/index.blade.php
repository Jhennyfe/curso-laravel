@extends('layout.app')
@section('title','Listagem')
@section('content')
    <h1> Listagem de Produtos (<a href="{{route('produtos.create')}}"> + </a>)</h1>

    <ul>
    @foreach($produtos as $produto)<!-- em $produtos, é o array, a tabela inteira, em $produto é só uma linha -->
        <li>
        {{$produto->name}} - 
        <a href="{{ route('produtos.show', $produto->id)}}"> (detalhes) </a>
        <a href="{{ route('produtos.edit', $produto->id)}}"> (editar) </a>
        </li>
    @endforeach
    </ul>

@endsection