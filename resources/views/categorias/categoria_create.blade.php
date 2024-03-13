@extends('master')
@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('categorias.store') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="Teste">
    <input type="text" name="descricao" placeholder="Descrição">
    <button type="submit">Create</button>
</form>
@endsection