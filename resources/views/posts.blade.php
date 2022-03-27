@extends('layouts.main')

@section('container')
        <h1>HALAMAN POST</h1>
        @foreach($posts as $post)
        <article class="mb-2">
        <a href="post/{{ $post['slug'] }}"> <h2>{{ $post["title"] }}</h2></a>
            <h5>By : {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
        @endforeach

@endSection