@extends('layouts.main')

@section('container')
        <h1>HALAMAN POST SINGLE</h1>
        
        <article class="mb-2">
        <h2>{{ $posts->title }}</h2>
            <p>By : {{ $posts->user->username }} in <a class="text-decoration-none" href="/category/{{ $posts->category->slug }}"> {{ $posts->category->name }}</a></p>
            {!! $posts->body !!}
        </article>
        <a href="/blog">Back</a>

@endSection
