@extends('layout.app')
@section('title','Editar produto')
@section('content')

<h1> Editar o produto {{$produtos->name}} </h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $item)
            <li class="error"> {{$item}}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('produtos.update', $produtos->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome: " value="{{ $produtos->name }}">
    <input type="text" name="valor" placeholder="Valor: " value="{{ $produtos->valor }}">
    <input type="text" name="quantidade" placeholder="Quantidade: " value="{{ $produtos->quantidade }}">
    <button type="submit"> Atualizar </button>
</form>