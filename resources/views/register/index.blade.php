@extends('layouts.app')

@section('body')
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @foreach($errors->all() as $message)
        <p>{{ $message }}</p>
    @endforeach

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <input name="username" type="text" placeholder="username" value="{{ old('username') }}">
        <input name="full_name" type="text" placeholder="full name" value="{{ old('fullname') }}">
        <input name="email" type="email" placeholder="email" value="{{ old('email') }}">
        <input name="phone_number" type="text" placeholder="phone number" value="{{ old('phone') }}">
        <input name="password" type="password" placeholder="password">
        <input name="password_confirmation" type="password" placeholder="confirm password">

        <button type="submit">Register</button>
    </form>
@endsection
