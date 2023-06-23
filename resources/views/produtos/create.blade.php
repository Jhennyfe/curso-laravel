@extends('layout.app')
@section('title','Criar produto')
@section('content')
    <h1> Novo Produto </h1>

    @if ($errors->any())
        <ul class="erros">
            @foreach ($errors->all() as $erros)
                <li class="error"> {{$erros}} </li>
                
            @endforeach
        </ul>
    @endif
    <form action="{{route('produtos.store')}}" method="POST"> 
        @csrf 
        <input type="text" name="name" placeholder="Nome do Produto: " value="{{old('name')}}">
        <input type="text" name="valor" placeholder="Valor: " value="{{old('valor')}}">
        <input type="text" name="quantidade" placeholder="Quantidade: " value="{{old('quantidade')}}">
        <button type="submit"> Enviar </button>

    </form>

    (<a href="{{route('produtos.index')}}"> Voltar </a>)


@endsection