@extends('layouts.app')

@section('body')
    <form action="{{ route('register') }}" method="POST">
        @csrf

    </form>
@endsection
