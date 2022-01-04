@extends('layouts.app')

@section('body')
    @auth
        <p>Logged in</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth

    @foreach($articles as $article)
        <p>
            <a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a>
        </p>
    @endforeach

    {{ $articles->links() }}
@endsection
