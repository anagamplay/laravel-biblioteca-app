@extends('master')
@section('content')

<h2>Show</h2>
<ul>
    <li>Nome: {{ $user->firstName }} {{ $user->lastName }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>


<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
</form>

@endsection