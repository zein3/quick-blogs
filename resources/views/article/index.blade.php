@extends('layouts.app')

@section('body')
    @foreach($articles as $article)
        <p>
            <a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a>
        </p>
    @endforeach

    {{ $articles->links() }}
@endsection
