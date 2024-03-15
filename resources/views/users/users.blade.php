@extends('master')
@section('content')

<!-- <a href="{{ route('users.create') }}">Create</a> -->

<div class="container">
    <h2>Users</h2>
    <ul class="list-group">
        @foreach ($users as $user)
            <li class="list-group-item"> 
                <img src="{{ asset('assets/icons/user_icon.png') }}" id="userIcon"> 
                {{$user->firstName}} {{$user->lastName}} | 
                <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> |
                <a href="{{ route('users.show', ['user' =>$user->id]) }}">Show</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection