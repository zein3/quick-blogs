@extends('layouts.app')

@section('body')
    <section class="px-4 text-gray-600 body-font md:px-24 lg:px-8">
        <div class="container py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                @if(count($articles) == 0)
                    <h1>Maaf, tidak ada artikel</h1>
                @endif

                @foreach($articles as $article)
                
                    <div class="p-3 md:w-1/2 lg:w-1/4">
                    <a href="">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden hover:shadow">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ $article->thumbnail }}" alt="blog">
                            <div class="p-4">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-2">{{ $article->title }}</h1>
                                <p class="text-base mb-3">{{ $article->excerpt() }}</p>
                                <div class="flex items-center flex-wrap">
                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection
