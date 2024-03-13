@extends('master')
@section('content')

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>{{$user->firstName}}</li>
    @endforeach
</ul>

@endsection