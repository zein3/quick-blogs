@extends('layouts.app')

@section('body')
    @foreach($errors->all() as $message)
        <x-alert :message="$message" />
    @endforeach
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input name="token" hidden value="{{ $token }}" /> <br />
        <input name="email" type="email" placeholder="email" value="{{ old('email') }}" /> <br />
        <input name="password" type="password" placeholder="password" /> <br />
        <input name="password_confirmation" type="password" placeholder="confirm password" /> <br />

        <button type="submit">Ganti Password</button>
    </form>
@endsection
