@extends('layouts.app')

@section('body')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        Username or email:
        <input type="text" name="email">

        <br/>

        Password:
        <input type="password" name="password">

        <br/>

        <button type="submit">Login</button>
    </form>
@endsection
