@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $posts->title }}</h1>
           
                <p>By : <a href="/blog?username={{ $posts->user->username }}"> {{ $posts->user->username }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts->category->slug }}"> {{ $posts->category->name }}</a></p>
            
                <img src="  https://source.unsplash.com/1200x400/?programming" class="card-img-top" alt="..." class="img-fluid">
            <article class="my-3">
                {!! $posts->body !!}
            </article>
            <a href="/blog">Back</a>
        </div>
    </div>
</div>
     

@endSection
