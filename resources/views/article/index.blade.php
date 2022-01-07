@extends('layouts.app')

@section('body')
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <p>
                <a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a>
            </p>
        @endforeach
    @else
        <h4 class="text-center mt-5 font-semibold text-lg">Maaf, artikel tidak tersedia</h4>
    @endif

    {{ $articles->links() }}
@endsection
