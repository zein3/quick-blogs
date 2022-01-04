@extends('layouts.app')

@section('body')
    @foreach($articles as $article)
        <p>
            <a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
        </p>
    @endforeach

    {{ $articles->links() }}
@endsection
