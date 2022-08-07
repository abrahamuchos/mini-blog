@extends('template')

@section('content')
    <div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>
        <img src="{{ asset('img/dev.png') }}" alt="Dev-logo" class="absolute -right-20 -bottom-40 opacity-20">
    </div>
    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray" id="">Contenido Tecnico</h1>
        <div class="grid grid-cols-1 gap-4 mb-4">
            @forelse ($posts as $post)
                <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center">
                        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                    </p>
                    <h2 class="text-lg text-gray-900 mt-2">{{ $post->title }}</h2>
                    <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                        {{ $post->user->name }}
                    </div>
                </a>


            @empty
                <span>Nothing to show</span>
            @endforelse
        </div>

        {{ $posts->links() }}
    </div>
@endsection
