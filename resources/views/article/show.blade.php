@extends('layouts.app')

@section('body')
    <h1>{{ $article->title }}</h1>
    <small>oleh {{ $article->author->username }}</small>

    <hr>

    <p>
        {{ $article->body }}
    </p>

    <a href="{{ route('index') }}">Go back</a>
@endsection
