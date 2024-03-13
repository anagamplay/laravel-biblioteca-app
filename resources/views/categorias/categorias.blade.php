@extends('master')
@section('content')

<a href="{{ route('categorias.create') }}">Create</a>

<h2>Categorias</h2>
<ul>
    @foreach ($categorias as $categoria)
        <li>{{$categoria->nome}} | <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}">Edit</a> | <a href="{{ route('categorias.show', ['categoria' =>$categoria->id]) }}">Show</a></li>
    @endforeach
</ul>

@endsection