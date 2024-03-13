@extends('master')
@section('content')

<h2>Show</h2>
<ul>
    <li>Nome: {{ $user->firstName }} {{ $user->lastName }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>

@endsection