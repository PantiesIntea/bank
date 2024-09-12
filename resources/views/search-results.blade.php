<!-- resources/views/search-results.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Результаты поиска для "{{ $query }}"</h1>

    @if($posts->isEmpty())
        <p>Ничего не найдено.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
