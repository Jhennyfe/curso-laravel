@extends('layout.app')
@section('title','Detalhes')
@section('content')

<h1> Detalhes do Produto </h1>
<ul>
<li>{{$produtos->name}} </li>
<li>{{$produtos->valor}}</li>
<li>{{$produtos->quantidade}}</li>
<li>{{$produtos->created_at}}</li>
</ul>
    <form action="{{route('produtos.destroy',$produtos->id) }}" method="POST">
        @method('DELETE')
        @csrf <!-- gera um token para fazer a autenticação -->
        <button type="submit"> Deletar </button>
    </form>
@endsection
