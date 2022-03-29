@extends('layouts.main')

@section('container')
        <h1>Post Category : {{ $category }}</h1>
        @foreach($posts as $post)
        <article class="mb-2">
        <a class="text-decoration-none" href="../post/{{ $post->slug }}"> <h2>{{ $post->title}}</h2></a>
            <p>By : {{ $post->author }} in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach

@endSection