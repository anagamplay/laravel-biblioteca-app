@extends('master')
@section('content')

<div class="container">
    <a href="{{ route('livros.create') }}">Create</a>

    <h2>Livros</h2>
    <ul class="list-group">
        @foreach ($livros as $livro)
            <li class="list-group-item"> 
                {{$livro->titulo}} | 
                <a href="{{ route('livros.edit', ['livro' => $livro->id]) }}">Edit</a> |
                <a href="{{ route('livros.show', ['livro' =>$livro->id]) }}">Show</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection