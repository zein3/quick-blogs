@extends('layouts.app')

@section('body')
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @foreach($errors->all() as $message)
        <p>{{ $message }}</p>
    @endforeach

    <form action="{{ route('login') }}" method="POST">
        @csrf

        Username or email:
        <input type="text" name="email" value="{{ old('email') }}" required>

        <br/>

        Password:
        <input type="password" name="password" required>

        <br/>

        <button type="submit">Login</button>
    </form>
@endsection
