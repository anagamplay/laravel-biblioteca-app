@extends('master')
@section('content')

<div class="container">
    <a href="{{ route('categorias.create') }}">Create</a>

    <h2>Categorias</h2>
    <ul class="list-group">
        @foreach ($categorias as $categoria)
            <li class="list-group-item"> 
                {{$categoria->nome}} | 
                <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}">Edit</a> |
                <a href="{{ route('categorias.show', ['categoria' =>$categoria->id]) }}">Show</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection