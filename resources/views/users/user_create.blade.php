@extends('master')
@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="firstName" placeholder="Your firstName" value="Ana">
    <input type="text" name="lastName" placeholder="Your lastName" value="Oliveira">
    <input type="text" name="email" placeholder="Your email" value="ana.oliveira@gmail.com">
    <input type="text" name="password" placeholder="Your password" value="123">
    <button type="submit">Create</button>
</form>
@endsection