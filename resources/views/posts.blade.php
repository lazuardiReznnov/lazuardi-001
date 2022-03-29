@extends('layouts.main')

@section('container')
        <h1>HALAMAN POST</h1>
        @foreach($posts as $post)
        <article class="mb-2">
        <a href="post/{{ $post->slug }}"> <h2>{{ $post->title}}</h2></a>
            <p>By : <a href="/author/{{ $post->user->username }}">{{  $post->user->username  }}</a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach

@endSection