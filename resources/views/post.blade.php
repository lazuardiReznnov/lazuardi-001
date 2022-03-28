@extends('layouts.main')

@section('container')
        <h1>HALAMAN POST SINGLE</h1>
        
        <article class="mb-2">
        <h2>{{ $posts->title }}</h2>
            <h5>By : {{ $posts->author }}</h5>
            {!! $posts->body !!}
        </article>
        <a href="/blog">Back</a>

@endSection
