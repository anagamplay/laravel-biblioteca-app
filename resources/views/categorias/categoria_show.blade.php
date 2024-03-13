@extends('master')
@section('content')

<h2>Show</h2>
<ul>
    <li>Nome: {{ $categoria->nome }} </li>
    <li>Descrição: {{ $categoria->descricao }}</li>
</ul>


<form action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
</form>

@endsection