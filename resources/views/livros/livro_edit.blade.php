@extends('master')
@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nome" value="{{ $categoria->nome }}">
    <input type="text" name="descricao" value="{{ $categoria->descricao }}">
    <button type="submit">Update</button>
</form>
@endsection