@extends('master')
@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('livros.store') }}" method="post">
    @csrf
    <input type="text" name="titulo" placeholder="Titulo" value="Teste">
    <input type="text" name="auto" placeholder="Autor">
    <input type="text" name="editora" placeholder="Editora">
    
    <button type="submit">Create</button>
</form>
@endsection