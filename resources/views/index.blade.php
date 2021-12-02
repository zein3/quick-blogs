@extends('layouts.app')

@section('content')
    <p class="my-5 text-4xl font-extrabold tracking-wide text-center">Hello, world!</p>
    <h2 class="text-center" x-data="{ message: 'Test page' }" x-text="message"></h2>
@endsection
